# Welcome!

So, you want to be a developer, huh? Well, I am willing to help you reach your goals. I have to start by telling you that being a developer is a difficult, long time cultivating with effort activity but just as much as any other career, I am just trying to be honest with you, being a developer require you to be open to learn new things and continue to study your whole life, if you don't find joy on it I thought you would like to know it in advance.

As of 2019 becoming a developer (and a good one) does not require to go to college or pay expensive tuition, instead, it requires a power of will, an internet connection and the ability to be open to change your mindset regarding the world you live in. How exciting does that sound?

If you still continue reading it means you want to know more and start learning the things that will make you a developer. So, I will get immediately to business. The first thing I want you to learn is what GIT is. Please watch the following [video](https://www.youtube.com/watch?v=Y9XZQO1n_7c).

I just need this first step to make you understand that despite what movies show us, developers are not lonely creatures. Instead, we love to communicate with others all the time. The thing is that it might be true that we don't do it the way everybody else does. We like to be able to remember all the conversations we had and, since we know we are not special humans, we make computers do that for us. We make real efforts for making sure we save all the knowledge and information we generate and acquire, no matter what it takes (and really good developers are master at it). We also love the fact that we can do our work from wherever we like/want. If not, look at [this picture](https://github.com/diegoseso/new-developer-career-path/while-writting.jpg) I took while I was writing this. 

I will also like you to read the following [article](https://simpleprogrammer.com/software-development-career-paths/), here it is explained what are the developer's career paths.


## What is GitHub?

GitHub is now the largest online storage space of collaborative works that exists in the world. At the heart of GitHub is Git, an open source project started by Linux creator Linus Torvalds. Git, like other version control systems, manages and stores revisions of projects. Although it’s mostly used for code, Git could be used to manage any other type of file, such as Word documents or Final Cut projects. Think of it as a filing system for every draft of a document.

The flagship functionality of GitHub is “forking” – copying a repository from one user’s account to another. This enables you to take a project that you don’t have write access to and modify it under your own account. If you make changes you’d like to share, you can send a notification called a “pull request” to the original owner. That user can then, with a click of a button, merge the changes found in your repo with the original repo.

These three features – fork, pull request and merge – are what make GitHub so powerful. if you wanted to contribute to an open source project you had to manually download the project’s source code, make your changes locally, create a list of changes called a “patch” and then e-mail the patch to the project’s maintainer. The maintainer would then have to evaluate this patch, possibly sent by a total stranger, and decide whether to merge the changes.

To understand how does it work, take a look at this [video](https://www.youtube.com/watch?v=w3jLJU7DT5E).


## How use GitHub?

**Step 1: Install git and create a GitHub account**

Follow the [instructions](https://git-scm.com/book/en/v2/Getting-Started-Installing-Git) to install git.
Then, create a GitHub account [here](https://github.com/).

**Step 2: Create a local git repository**

You typically obtain a Git repository in one of two ways:

1. You can take a local directory that is currently not under version control, and turn it into a Git repository, or

2. You can clone an existing Git repository from elsewhere.

In either case, you end up with a Git repository on your local machine, ready for work.

*Getting & Creating Projects*

| Command | Description |
| ----------- | ----------- |
| git init | Initialize a local Git repository |
| git clone ssh://git@github.com/[username]/[repository-name].git | Create a local copy of a remote repository |

**Step 3: Add new files to the repository**

| Command | Description |
| ----------- | ----------- |
| git status | Check status |
| git add [file-name.txt] | Add a file to the staging area|
| git add -a | Add a all new and change files to the staging area|


One of the most confusing parts when you're first learning git is the concept of the staging environment and how it relates to a commit.

A **commit** is a record of what files you have changed since the last time you made a commit. Essentially, you make changes to your repo (for example, adding a file or modifying one) and then tell git to put those files into a commit.

Commits make up the essence of your project and allow you to go back to the state of a project at any point.

To add a file to a commit, you first need to add it to the staging environment. To do this, you can use the git add [filename] command. Once you've used the git add command to add all the files you want to the staging environment, you can then tell git to package them into a commit using the git commit command. 

**Step 4: Create a commit**

| Command | Description |
| ----------- | ----------- |
| git commit -m "commit message" | Commit changes |
| git rm -r [file-name.txt] | Remove a file or folder|

*Always use a clear message. It should be something related to what the commit contains*

### A new Branch

Branches allow you to move back and forth between 'states' of a project. For instance, if you want to add a new page to your website you can create a new branch just for that page without affecting the main part of the project. Once you're done with the page, you can merge your changes from your branch into the master branch. When you create a new branch, Git keeps track of which commit your branch 'branched' off of, so it knows the history behind all the files. 

| Command | Description |
| ----------- | ----------- |
| git branch |	List branches (the asterisk denotes the current branch) |
| git branch -a	| List all branches (local and remote) |
| git branch [branch name]	| Create a new branch |
| git branch -d [branch name]	| Delete a branch |
| git push origin --delete [branch name]	| Delete a remote branch |
| git checkout -b [branch name]	| Create a new branch and switch to it |
| git checkout -b [branch name] origin/[branch name]	| Clone a remote branch and switch to it |
| git checkout [branch name] |	Switch to a branch |
| git checkout - |	Switch to the branch last checked out |
| git checkout -- [file-name.txt]	| Discard changes to a file |
| git merge [branch name] |	Merge a branch into the active branch |
| git merge [source branch] [target branch] |	Merge a branch into a target branch |


**Step 5: Push a branch**

Now you'll push the commit in your branch to your new GitHub repo. This allows other people to see the changes you've made. If they're approved by the repository's owner, the changes can then be merged into the master branch.

| Command | Description |
| ----------- | ----------- |
| git push origin [branch name] |	Push a branch to your remote repository |
| git push -u origin [branch name] |	Push changes to remote repository (and remember the branch) |
| git push |	Push changes to remote repository (remembered branch) |
| git push origin --delete [branch name]	| Delete a remote branch |

**Step 6: Pull Request**

Pull Request (PR) is a Github feature that allows users to collaborate better together. Usually in source control software there is a main branch that describes production — in git it is the master branch. One can create a feature branch and make changes there, then issue a PR to the master branch for someone else to review, approve or reject the changes and merge to the master branch eventually. Discussing potential improvements is crucial to write and maintain a high quality repository.

| Command | Description |
| ----------- | ----------- |
| git pull |	Update local repository to the newest commit |
| git pull origin [branch name]	| Pull changes from remote repository |
















