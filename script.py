import random
import string
import sys

choix = sys.argv[1]
longueur = int(sys.argv[2])

caracteres = string.ascii_letters  # Par défaut : lettres

if choix == '2':
    caracteres += string.digits
elif choix == '3':
    caracteres += string.digits + "!@#$%&*"

mot_passe = ''.join(random.choices(caracteres, k=longueur))

with open("script_mdp.txt", "w", encoding="utf-8") as f:
    f.write(mot_passe)
