# Ghoofy
#### Slackbot to manage talent.

![Goofy inspecting](xxx.gif "Goofy inspecting")

*"They say we learn from our mistakes. That's why I'm making as many as possible. I'll soon be a genius!"*

##Setup
- Clone repo
- ```composer install/update```
- Create Slack App and get App ID
- Set Bot Token Scope with [OAuth & Permissions](https://api.slack.com/apps/YOURAPPID/oauth)
    - channels:read
    - chat:write
    - groups:read    
    - im:read    
    - mpim:read
    - users:read
- Rename ```.env.example``` to ```.env``` and fill with your settings.

##Functions
- Home screen to show funtionality
- Send message when roles change

## Screenshots?
![Ghoofy - Admin page](xxx.png "Ghoofy - Admin page")

![Ghoofy - Home](xxx.png "Ghoofy - Home")

![Ghoofy  - Message example](xxx.png "Ghoofy - Message example")

## Someday
- Message input to personal blog.
- Monthly summary on homescreen.