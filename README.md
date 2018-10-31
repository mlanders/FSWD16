# FSWD16

Lambda Full Stack Web Development 16 website.

[View Website](https://fswd16.netlify.com/)

If you would like to help create our class website please branch and do a pull request. 

For a step by step on how to get started, see the next section. An easy addition to make is to add your github handle into the students.json file. 

### Getting Started With Git

To make contributions to this class website, first fork this repository. In the top right hand corner, click Fork. Now you will have a copy of this repository in your github repositories. 

If you haven't already [installed Git](https://help.github.com/articles/set-up-git), do so now.

#### Step 1: Make a local clone of your fork

Navigate to your repository and click Clone or Download. Copy this URL. 

Open your terminal and type `git clone [REPOSITORY URL]` with your url, in the folder you wish to create the clone. Once you hit enter, you now have a local copy (meaning it is on your computer) of your forked repository.

#### Step 2: Sync your fork with the original repo

Now you want to connect your fork with the original repository so that you can pull any updates that are made to this repository into your version. 

Go to this repository and click Clone or Download. Copy this URL. 

Type `git remote add upstream [ORIGINAL REPOSITORY URL]` with this repo's url. Now if you type `git remote -v` it will show you that you have the origin, which is your repository, and the upstream, which is this repository.

To update the repository, you can type `git fetch upstream` followed by `git merge upstream/master`. 

#### Step 3. Make a new branch and pull request

Create the branch on your local folder and switch over to it by typing `git checkout -b [name-of-new-branch]`. 

Now you can make any changes to the files locally. Type `git add .` to add all the changes you made in this folder, then type `git commit -m "your message here"` to make a commit and a commit message. Finally, type `git push origin name-of-new-branch` to push to your branch. 

Navigate to the github repository and click Compare & Pull Request. This will allow you to make a pull request to the original repository, and once it is accepted it will be merged into the main branch.

### Helpful Guides

Below are some additional useful guides. 

[Understanding the GitHub flow](https://guides.github.com/introduction/flow/)

[GitHub Guides](https://guides.github.com)

[GitHub Training Videos](https://www.youtube.com/githubguides)


### Website Task List

- [x] Add Semantic UI
- [x] Add Students List JSON File
- [x] Add Styling
- [x] Add Bootstrap
- [x] Search implementation
