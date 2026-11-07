---
title: '{{ replace .File.ContentBaseName "-" " " | title }}'
weight: 100
command: 'dft --{{ .File.ContentBaseName }}'
# card: top       # stack in the same card as other windows with this id
# toolbar: DFT    # replace the whole toolbar title
# prompt: false   # drop the closing prompt with the blinking cursor
---
