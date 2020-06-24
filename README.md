# Ghoofy
#### Slackbot to manage talent and role assignment.

![Goofy inspecting](https://github.com/wgroenewold/Ghoofy/blob/master/readme_assets/header.gif?raw=true "Goofy inspecting")

*"They say we learn from our mistakes. That's why I'm making as many as possible. I'll soon be a genius!"*

## Setup
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

## Functions
- Home screen to show funtionality
- Send message when roles change

## Screenshots?
![Ghoofy - Admin page](https://github.com/wgroenewold/Ghoofy/blob/master/readme_assets/admin.png?raw=true "Ghoofy - Admin page")

![Ghoofy - Home](https://github.com/wgroenewold/Ghoofy/blob/master/readme_assets/home.png?raw=true "Ghoofy - Home")

![Ghoofy  - Message example](https://github.com/wgroenewold/Ghoofy/blob/master/readme_assets/message.png?raw=true "Ghoofy - Message example")

## Someday
- Message input to personal blog.
- Monthly summary on homescreen.
<<<<<<< HEAD
- Update Slack profile with new roles.
- Update Rollebollen.app with new roles.
- Update Gripp with new roles.
=======
>>>>>>> 59056ef57bd8c6fcd170b609d52455b058fe320b
