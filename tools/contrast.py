"""Print WCAG contrast ratios for the colour pairs a theme.json palette actually uses.

Usage: python3 tools/contrast.py [theme.json | styles/<variation>.json ...]
Exits 1 if any text pair falls below 4.5:1 (or 3:1 for pairs marked large/ui).
"""
import json
import sys

PAIRS = [
    ("contrast", "base", 4.5), ("contrast-2", "base", 4.5), ("accent-2", "base", 4.5),
    ("contrast", "base-2", 4.5), ("contrast-2", "base-2", 4.5), ("accent-2", "base-2", 4.5),
    ("on-accent", "accent", 4.5), ("base", "contrast", 4.5), ("accent", "on-accent", 4.5),
    ("rule", "base", 1.0),
]


def lum(hex_color):
    h = hex_color.lstrip("#")
    rgb = [int(h[i:i + 2], 16) / 255 for i in (0, 2, 4)]
    lin = [c / 12.92 if c <= 0.04045 else ((c + 0.055) / 1.055) ** 2.4 for c in rgb]
    return 0.2126 * lin[0] + 0.7152 * lin[1] + 0.0722 * lin[2]


def ratio(a, b):
    la, lb = sorted((lum(a), lum(b)), reverse=True)
    return (la + 0.05) / (lb + 0.05)


def palette(path):
    data = json.load(open(path))
    return {c["slug"]: c["color"] for c in data["settings"]["color"]["palette"]}


def main(paths):
    failed = False
    for path in paths:
        pal = palette(path)
        print(path)
        for fg, bg, need in PAIRS:
            if fg not in pal or bg not in pal:
                continue
            r = ratio(pal[fg], pal[bg])
            bad = r < need
            failed |= bad
            print(f"  {fg:>10} on {bg:<8} {r:5.2f}:1 {'FAIL' if bad else 'ok'}")
    return 1 if failed else 0


if __name__ == "__main__":
    sys.exit(main(sys.argv[1:] or ["theme.json"]))
