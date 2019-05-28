bot "Je récupère le projet :"
git pull

# create base configuration
bot "Je lance la configuration :"
#php wp-cli.phar core config --dbhost=$dbhost --dbname=$dbname --dbuser=$dbuser --dbpass=$dbpass --skip-check --extra-php <<PHP
php wp-cli.phar core config --dbhost=intranetuswww.mysql.db --dbname=intranetuswww --dbuser=intranetuswww --dbpass=YU64BJdN9jRyDhyxnyQY48kpVd3t4d --dbprefix=wp_amaury_ --skip-check --extra-php <<PHP
define( 'WP_DEBUG', true );
PHP

# Create database
bot "Je crée la base de données :"
php wp-cli.phar db create

# Generate random password
passgen=`head -c 10 /dev/random | base64`
password=${passgen:0:10}

# launch install
bot "et j'installe !"
php wp-cli.phar core install --url="https://sem-web.fr/clients/amaury" --title="amaury" --admin_user=alopin --admin_email=alopin@sem-web.fr --admin_password="$password"  <<PHP
define( 'WP_DEBUG', true );
PHP

# Download from private git repository
bot "Je télécharge le thème Divi :"
cd wp-content/themes/
git clone git@github.com:amaurylopin/divi.git
cd ../..
php wp-cli.phar theme activate divi

# Create standard pages
bot "Je crée les pages habituelles (Accueil, blog, contact...)"
php wp-cli.phar post create --post_type=page --post_title='Accueil' --post_status=publish
php wp-cli.phar post create --post_type=page --post_title='Blog' --post_status=publish
php wp-cli.phar post create --post_type=page --post_title='Contact' --post_status=publish
php wp-cli.phar post create --post_type=page --post_title='Mentions Légales' --post_status=publish

# Create fake posts
bot "Je crée quelques faux articles"
curl http://loripsum.net/api/5 | wp post generate --post_content --count=5

# Change Homepage
bot "Je change la page d'accueil et la page des articles"
php wp-cli.phar option update show_on_front page
# Menu stuff
bot "Je crée le menu principal, assigne les pages, et je lie l'emplacement du thème : "
php wp-cli.phar menu create "Menu Principal"
php wp-cli.phar menu item add-post menu-principal 3
php wp-cli.phar menu item add-post menu-principal 4
php wp-cli.phar menu item add-post menu-principal 5
php wp-cli.phar menu location assign menu-principal primary-menu

# Misc cleanup
bot "Je supprime Hello Dolly, les thèmes de base et les articles exemples"
php wp-cli.phar post delete 1 --force # Article exemple - no trash. Comment is also deleted
php wp-cli.phar post delete 2 --force # page exemple
php wp-cli.phar plugin delete hello
php wp-cli.phar theme delete twentynineteen
php wp-cli.phar theme delete twentyseventeen
php wp-cli.phar theme delete twentysixteen
php wp-cli.phar option update blogdescription ''

# Permalinks to /%postname%/
bot "J'active la structure des permaliens"
php wp-cli.phar rewrite structure "/%postname%/" --hard
php wp-cli.phar rewrite flush --hard

# cat and tag base update
php wp-cli.phar option update category_base theme
php wp-cli.phar option update tag_base sujet

# Git project
# REQUIRED : download Git at http://git-scm.com/downloads
bot "Je Git le projet :"
git add .  # Add all untracked files
git commit -m "Online commit amaury"   # Commit changes
git push

# Open the stuff
#bot "Je lance le navigateur, Sublime Text et le finder."

# Open in browser
#open https://sem-web.fr/clients/amaury

# Open in Sublime text
# REQUIRED : activate subl alias at https://www.sublimetext.com/docs/3/osx_command_line.html
#cd wp-content/themes
#subl $1

# Open in finder
#cd $1
#open .

# Copy password in clipboard
echo $password | pbcopy

# That's all ! Install summary
bot "${green}L'installation est terminée !${normal}"
line
echo "URL du site:   https://sem-web.fr/clients/amaury"
echo "Login admin :  admin$1"
echo -e "Password :  ${cyan}${bold} $password ${normal}${normal}"
line
echo -e "${grey}(N'oubliez pas le mot de passe ! Je l'ai copié dans le presse-papier)${normal}"

line
bot "à Bientôt !"
line
line
