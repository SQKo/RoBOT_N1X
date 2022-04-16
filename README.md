# RoBOT_N1X
Discord Interactions Bot made with DiscordPHP, via heroku

## Setup
1. Go to [Discord developers portal](https://discord.com/developers/applications/)
2. Create/select your application
3. Copy **Public Key**
4. Paste public key to environment variable `CLIENT_PUBLIC_KEY`
5. Deploy your app
6. Set **Interactions Endpoint URL**:
   - [`https://url.com/index.php`](https://github.com/SQKo/RoBOT_N1X/blob/main/public/index.php) for [DiscordPHP-Slash](https://github.com/discord-php/DiscordPHP-Slash) `/ping` demo command
   - [`https://url.com/interaction.php`](https://github.com/SQKo/RoBOT_N1X/blob/main/public/interaction.php) for vanilla [discord-interactions-php](https://github.com/discord/discord-interactions-php) `/ping` demo command
7. Click **Save**
8. Type the `/ping` command on your Bot in Discord

> Note: Does not include steps to register the `/ping` command, do it manually via Postman or use [DiscordPHP-Slash Register class](https://github.com/discord-php/DiscordPHP-Slash#discordslashregisterclient)
