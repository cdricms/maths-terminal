#!/bin/bash

# Pour utiliser:
# chmod +x examples.sh, si ce n'est pas déjà fait
# Pour mettre les INSERT générés dans un fichier .sql
# ./examples.sh > values.sql
# Se connecter à la base et vider la table examples
# Importer depuis phpMyAdmin le fichier values.sql
# Ou le faire depuis la console mysql dans le shell avec: source ./values.sql
i=1 
root="$(pwd)/"
for chapter in $(ls ./data/maths/); do 
  chapter_nmb=$(cut -d '_' -f2 <<< $chapter)
  for exemple in $(ls data/maths/$chapter/*.html); do
    exemple_nmb=$(basename $exemple | cut -d . -f1 | cut -d _ -f2)
    echo "INSERT INTO examples (examples_id, examples_number, examples_is_bac, examples_is_ds, examples_chapter_id, examples_path)
    VALUES ($i, $exemple_nmb, 0, 0, $chapter_nmb, '$root$exemple');"
    ((i=$i+1))
  done
done
