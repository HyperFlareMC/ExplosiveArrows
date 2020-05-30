# ExplosiveArrows
Plugin for PocketMine-MP that makes arrows explosive

# Installation
Since this plugin is not officially released on Poggit, you need to download it and either run it from source, or create the `.phar` for it yourself.

## Running From Source

` - Click the "Clone or Download" Button,` <br />
` - Grab that link, copy it to your clipboard, and head over to your IDE,`<br />
` - Go to your IDE's Terminal, make sure you are inside of your plugin directory, if not use -> cd .. <- or -> cd plugins <- whatever it takes to get there, and run the command -> git clone <link goes here> <-,` <br />
` - Your plugin is in your plugin's folder! You can now run it from source, or make it into a .phar for distribution. Below is a tutorial on how to make it into a .phar`

## Creating a .phar from Source Code

` - Make sure you have DevTools in your plugins directory, if you don't, head over to -> https://poggit.pmmp.io/p/DevTools/ <- and plop that download to your plugins directory,` <br />
` - Run this command in your Server's Console -> makeplugin ExplosiveArrows <- then, the plugin's .phar will be located in this directory -> /plugin-data/DevTools/ExplosiveArrows.phar <-`

### Common Issues with .phar Creation

One of the most common issues with `.phar` plugin creation is the server telling you that no such files exist when you run the `makeplugin` command. This happens, more than likely, because your schema is set to a `bukkit-plugin`. At least for PhpStorm, this is the default setting. Go head over to the `plugin.yml` file, and if you are in PhpStorm, click in the bottom right where it says `bukkit-plugin`, and scroll through that list until you find `pocketmine-plugin`. Once that is selected, your problem should be solved, just run the `makeplugin` command again.

# SUPPORT

This may seem like a complicated process, but I promise it is not. If you need additional assistance, feel free to open an Issue here on the Repository, or DM me on Discord: `HyperFlare#7018`
