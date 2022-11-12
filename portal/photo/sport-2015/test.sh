#!/bin/bash
shopt -s nullglob
shopt -s nocaseglob

for f in *.JPG; do
    convert "$f" -resize '150x>' -define jpeg:extent=30KB "$f"
done


for f in *.JPG; do
    convert "$f" -resize 'x150>' -define jpeg:extent=30KB "$f"
done
