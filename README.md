# ak
website development project by me <br>
Author: Amar pandhari Koche  <br>

Git configuring in local machin <br>
git config --globl user.name "My Name" <br>

git config --global user.email "amarkoche100@gmail.com" <br>

git config --list <br>

ls -a "Hidden file show in our direcotry" <br>

git status " to show the git status" <br>

git add "file name" <br>

git status "to show the status of file " <br>

git add . " add all file at a time" <br>

git commit -m "write your massage relative " <br>

git push origin main "push to github to upload local repo content to remote repo" <br>

git push origin main  <br>



*************Init Command**************

init - used to create a new git repo in local maching
git init

git remote add origin <--link-->

git remote-v (to veify remote)

git branch (to check branch)

git branch -M min (to rename branch)

git push origin main


*************To Create Branch ***************

git branch (To check which branch is you are)

git branch -M branch namne (to rename branch name)

git checkout <-branch name-> (to checkout from one branch to another )

git checkout -b <-branhc name-> (To create new branch)


git checkout <-branch name-> (to checkout from one branch to another )

git branch -d <-branch name-> (To Delete Branch)

******************Merging Code *******************

Way 1
git diff <-branch name-> (to compare commits, branches, files & more)

git megre <-branch name -> (to merge 2 branches)

Way 2
Create a PR

****************Pull Command ****************
git pull origin main

used to feth and download content from a remote repo and immediately update the local repo to atch that content.

****************Resolving Merge Conflicts *****************

An event that takes place when Git is unable to untomaticlly resolve difference in code between tow commits .

git diff (IN which file we have to change in brach)

git merge <-branch name->


****************Undoing Chnges *****************

Case 1 : staged changes
git reset <-file name ->

git reset

Case 2 : commited changes (for one commit)

git reset HEAD ~1

Case 3 : commited changes (for many ommits)

git reset <-commit hash->
git reset --hard <-commit hash ->








