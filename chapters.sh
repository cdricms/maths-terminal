#!/bin/bash

# Pour utiliser:
# chmod +x examples.sh, si ce n'est pas déjà fait
# Pour mettre les INSERT générés dans un fichier .sql
# ./examples.sh > values.sql
# Se connecter à la base et vider la table examples
# Importer depuis phpMyAdmin le fichier values.sql
# Ou le faire depuis la console mysql dans le shell avec: source ./values.sql
root="$(pwd)/"
for chapter in $(ls `$root`data/maths/); do 
  chapter_title=$(basename $chapter)
  chapter_nmb=$(cut -d '_' -f2 <<< $chapter_title)
  echo "INSERT INTO chapters (chapters_id, chapters_title, chapters_number)
  VALUES ($chapter_nmb, '$chapter_title', $chapter_nmb);"
done
