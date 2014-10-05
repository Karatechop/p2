# Boris Rugel xkcd Password Genrator

## Live URL
<http://p2.borisrugel.com/>

## Description
A simple xkcd password generator created as my Harvard Extension School CSCI 
E-15 P2 project.

## Demo
http://www.screencast.com/t/E48Fzo5k

## Details for teaching team
No login required.

Number of commits on GitHub may seem small. I've accidentally crached my Cmder 
while entering a commit message which created some sort of error that prevented 
push to repository. To solve this I had to do everything from scratch - 
delete P2 folders in my foot, on GH and on DigitalOcean, recreate and reconnect 
them. All commits visible on GH were done after P2 recreation. Older commits can 
be found in "commit_history_and_errors.txt".

## Commits after deadline
Separator bug correction - if other symbols then " " (space) and "-" used password 
does not fit into output area, removed other symbols then " " and "-" from 
separator array and added them to symbol list array to avoid page redesign. 
Password creation logic remained intact.

## Outside code
* Bootstrap: http://getbootstrap.com/
* Bootstrap Theme: http://bootswatch.com/superhero/