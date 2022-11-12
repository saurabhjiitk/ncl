#!/bin/bash
shopt -s nullglob
shopt -s nocaseglob

for f in *.JPG; do
    convert "$f" -resize '800x>' -define jpeg:extent=500KB "$f"
done


for f in *.JPG; do
    convert "$f" -resize 'x800>' -define jpeg:extent=500KB "$f"
done
