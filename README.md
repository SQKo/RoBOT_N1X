# RoBOT_N1X
Discord Interactions Bot Demo made with DiscordPHP-Slash, via heroku apache2

## Setup
1. Clone/download the repository
2. Run `composer update`
3. Go to [Discord developers portal](https://discord.com/developers/applications/)
4. Create/select your application
5. Copy **Public Key**
6. Paste public key to environment variable `CLIENT_PUBLIC_KEY`
7. Deploy your app
8. Set **Interactions Endpoint URL**:
   - [`https://url.com/index.php`](https://github.com/SQKo/RoBOT_N1X/blob/main/public/index.php) for [DiscordPHP-Slash](https://github.com/discord-php/DiscordPHP-Slash)
   - [`https://url.com/interaction.php`](https://github.com/SQKo/RoBOT_N1X/blob/main/public/interaction.php) for vanilla [discord-interactions-php](https://github.com/discord/discord-interactions-php)
9. Click **Save**
10. Type the `/ping` command on your Bot in Discord

> Note: Does not include steps to register the `/ping` command definitions, do it manually via Postman or use [DiscordPHP-Slash Register class](https://github.com/discord-php/DiscordPHP-Slash#discordslashregisterclient)
