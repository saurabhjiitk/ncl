#!/bin/bash
shopt -s nullglob
shopt -s nocaseglob

for f in *.JPG; do
    convert "$f" -resize '160x160>' -define jpeg:extent=30KB "$f"
done



