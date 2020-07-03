# HubDelay
Teleport to the hub with a delay.

this is the PocketMine-MP Plugin to teleport player to a hub with a delay.

## Requirements
PocketMine-MP API 3.0.0

## How does this work?
Basically the `/hub` command will teleport the player to the default world and the default spawn.
So, you only need to change the contents of the **level-name** variable in the _server.properties_ file to be the name of your world lobby. and execute the `/setworldspawn` command on your world lobby server.

## Command
- `/hub` - Back to hub with a delay of 5 seconds.

## Future Additions
- [X] Creating config files
- [X] Customize the time to delay to the hub
- [X] Cooldown for command execution (custom delay + 5)
- [ ] Added `/sethub` command to make it easier to set the position / location of the hub / lobby
- [ ] Add custom aliases that can be set in the config file
