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

# Linux Commands - Tutorial

How to use the Bash command line interface on Unix/Linux

## Command line: 
A command line, or terminal, is a text based interface to the system. You are able to enter commands by typing them on the keyboard and feedback will be given to you similarly as text.

### Basics navigation:

| Command |  Description | 
| ----------- | ----------- |
| **pwd** |  Just tells you what your current or present working directory is. | 
| **ls** | To know what is there. | 
| **cd** | To move around in the system we use a command called cd which stands for change directory. | 
| **mkdir [options] <Directory>** | To create a directory. | 
| **rmdir [options] <Directory>** | Remove Directory | To remove a directory. **There is no undo!!** | 
| **touch [options] <filename>** | To create a new file. | 
| **cp [options] <source> <destination>** | Copy a file or Directory. | 
| **mv [options] <source> <destination>** | Move a file or Directory. | 



### MORE INFO

**Paths**

- **Absolute paths** specify a location (file or directory) in relation to the root directory. You can identify them easily as they always begin with a forward slash ( / )

- **Relative paths** specify a location (file or directory) in relation to where we currently are in the system. They will not begin with a slash.

**Shorcuts**

~ (tilde) - This is a shortcut for your home directory. If your home directory is /Users/youname, then you could refer to the directory Documents with the path /Users/yourname/Documents or ~/Documents

. (dot) - This is a reference to your current directory. In the example above we referred to Documents with a relative path. It could also be written as ./Documents 

.. (dotdot)- This is a reference to the parent directory. You can use this several times in a path to keep going up the hierarchy. If you were in the path /Users/yourname you could run the command ls ../../ and this would do a listing of the root directory.


**Hidden Files and Directories**

Linux actually has a very simple and elegant mechanism for specifying that a file or directory is hidden. If the file or directory's name begins with a . (full stop) then it is considered to be hidden. You don't even need a special command or action to make a file hidden. Files and directories may be hidden for a variety of reasons. Configuration files for a particular user (which are normally stored in their home directory) are hidden for instance so that they don't get in the way of the user doing their everyday tasks.

To make a file or directory hidden all you need to do is create the file or directory with it's name beginning with a . or rename it to be as such. Likewise you may rename a hidden file to remove the . and it will become unhidden. 


**Manual Pages**

The manual pages are a set of pages that explain every command available on your system including what they do, the specifics of how you run them and what command line arguments they accept. Some of them are a little hard to get your head around but they are fairly consistent in their structure so once you get the hang of it it's not too bad. You invoke the manual pages with the following command:
man <command to look up>

It is possible to do a keyword search on the Manual pages. To be effective with this approach, you may need a few goes. It is not uncommon to find that a particular word exists in many manual pages.

**man -k <search term>**

If you want to search within a manual page this is also possible. To do this, whilst you are in the particular manual page you would like to search press forward slash '/' followed by the term you would like to search for and hit 'enter' If the term appears multiple times you may cycle through them by pressing the 'n' button for next.


**Shorcuts:** 

1. When you enter commands, they are actually stored in a history. You can traverse this history using the up and down arrow keys. So don't bother re-typing out commands you have previously entered, you can usually just hit the up arrow a few times. You can also edit these commands using the left and right arrow keys to move the cursor where you want.

2. If you run the command cd without any arguments then it will always take you back to your home directory.

3. When you start typing a path (anywhere on the command line, you're not just limited to certain commands) you may hit the Tab key on your keyboard at any time which will invoke an auto complete action. If nothing happens then that means there are several possibilities. If you hit Tab again it will show you those possibilities. You may then continue typing and hit Tab again and it will again try to auto complete for you.

# The Developer Work

A developer is the key individual behind all software applications. Generally, developers are well versed in at least one programming language and proficient in the art of structuring and developing software code for software or a program. Depending on job role and type of software developed, a developer may be classified as a software developer, application developer, mobile developer, Web developer, etc.

Although the primary job role is writing code, a developer also may gather requirements for software, design or overall software architecture, software documentation and other related software development processes. It's up to the developer to consider and take care not only that their code works, but also: 

**1. Readability of code:**
Writing code that is readable is critical for any software application that needs to be maintained for any length of time.  There are valid performance and anti-theft reasons to minify or even obfuscate code that is being deployed, but the source with which the team works should be kept in as readable and well-organized a state as possible.  Code that is well written for human understanding should generally be readable by an experienced developer with little need for external documentation or code comments (except to explain why certain design decisions were made).

**2. Cyclomatic complexity:**

The cyclomatic complexity of a section of source code is the number of linearly independent paths within it. For instance, if the source code contained no control flow statements (conditionals or decision points), the complexity would be 1, since there would be only a single path through the code. If the code had one single-condition IF statement, there would be two paths through the code: one where the IF statement evaluates to TRUE and another one where it evaluates to FALSE, so the complexity would be 2. Two nested single-condition IFs, or one IF with two conditions, would produce a complexity of 3.

Mathematically, the cyclomatic complexity of a structured program[a] is defined with reference to the control flow graph of the program, a directed graph containing the basic blocks of the program, with an edge between two basic blocks if control may pass from the first to the second. The complexity M is then defined as[2]

**M = E − N + 2P,**
where:

E = the number of edges of the graph.
N = the number of nodes of the graph.
P = the number of connected components.

Programmers should count the complexity of the modules they are developing, and split them into smaller modules whenever the cyclomatic complexity of the module exceeded 10.


**3. Identation**

Indentation is not a requirement of most programming languages, where it is used as secondary notation. Rather, indenting helps better convey the structure of a program to human readers. Especially, it is used to clarify the link between control flow constructs such as conditions or loops, and code contained within and outside of them. However, some languages use indentation to determine the structure instead of using braces or keywords; this is termed the off-side rule. In such languages, indentation is meaningful to the compiler or interpreter; it is more than only a clarity or style issue.

**4. Legacy code**

Legacy code is source code that relates to a no-longer supported[citation needed] or manufactured operating system or other computer technology. The term can also mean code inserted into modern software for the purpose of maintaining an older or previously supported feature – for example supporting a serial interface even though many modern systems do not have a serial port.

In practice, most source code has some dependency on the platform for which it is designed – even if a programmer uses a platform-independent programming language like Java, it is hard to write a large, useful program that is totally independent of its environment. When the manufacturer upgrades a platform (or the platform is superseded), the code may no longer work without changes, and becomes legacy code. A large part of the task of a software engineer is to continually alter code to prevent this.

While the term usually refers to source code, it can also apply to executable code that no longer runs on a later version of a system, or requires a compatibility layer to do so. An example would be a classic Macintosh application which will not run natively on Mac OS X, but runs inside the Classic environment, or a Win16 application running on Windows XP using the Windows on Windows feature in XP.

**5. Continuous Integration:**

Continuous Integration is a development practice that requires developers to integrate code into a shared repository several times a day. Each check-in is then verified by an automated build, allowing teams to detect problems early. 

By integrating regularly, you can detect errors quickly, and locate them more easily.

**6. Automated Testing:**

Automated testing (AKA, test automation) is a development process that involves tools to execute predefined tests against software based on an event. These tests typically involve operations that are repetitive in both their nature and outcome.

There are many different ways for developers to test the code they write. Most of the time, these tests are conducted manually. Automated testing differs by having a process, system, or service that conducts these tests in response to developers committing changes to source code. In practice, the impact on the developer's workflow is minimal since the tests are conducted in an asynchronous and autonomous fashion.

The nature of automated testing for developers is clear: we're performing a predefined series of tasks (i.e. tests) against a set of preconditions and postconditions (i.e. assertions) based upon a triggering event. 

The evidence for developers to use and support automated testing is clear; it has a dramatic impact on developer productivity when integrated properly into a workflow. While it's true to claim that there are costs associated with automated testing, they are amortized over the lifetime of the software project and can even save you time and money in the long-term.













