# WCHHRIS-APIs



## Initial Setup for GitLab Repository

Generate and Add an SSH key to allow read/write access to the GitLab repository.
Follow the steps here: [Generate an SSH key pair](https://docs.gitlab.com/user/ssh/?tab=Git+Bash+on+Windows#generate-an-ssh-key-pair)

```
git clone https://gitlab.com/wrldcapitalholdings/wchhris.git wchhris
cd wchhris
git branch -M main
git push -u origin main
```
_Note: Only set upstream on the initial setup for the main branch. **DO NOT PUSH DIRECTLY TO MAIN REMOTE BRANCH**_

## Installation and Setup Guide

Use the guide from the link below for the step by step installation process.

- [ ] [Installation Handbook](https://docs.google.com/document/d/1Y3ADbRTwi_eYJQqLAwjSQ5Lxh4NQJGdUBbw_2ezYgTs/edit?usp=sharing)

## Collaborate with your team

- [ ] [Invite team members and collaborators](https://docs.gitlab.com/ee/user/project/members/)
- [ ] [Create a new merge request](https://docs.gitlab.com/ee/user/project/merge_requests/creating_merge_requests.html)
- [ ] [Automatically close issues from merge requests](https://docs.gitlab.com/ee/user/project/issues/managing_issues.html#closing-issues-automatically)
- [ ] [Enable merge request approvals](https://docs.gitlab.com/ee/user/project/merge_requests/approvals/)
- [ ] [Set auto-merge](https://docs.gitlab.com/ee/user/project/merge_requests/merge_when_pipeline_succeeds.html)

## Creating Merge Request/Feature branch
In your terminal run:
```
cd wchhris <-- make sure you're on the working directory
git checkout -b <feature-branch>
git push -u origin <feature-branch>
```
_Note: Naming convention for the branch names would look something like this **feature-add-popup-modal** or if created from a ticket usually like **123-fix-alignment-issue**_

- [ ] On the GitLab Repository Create new Merge Request notification will popup/or you can follow the link provided after git push.
- [ ] Add the Title of the MR
- [ ] Add a description if possible
- [ ] Click Assign to me
- [ ] Assign a Reviewer
- [ ] Enable Delete source branch and Squash commits option (optional)
- [ ] Create merge request

**IMPORTANT REMINDER!!!**\
Make sure to target **feature-staging** branch and not the **main** branch to avoid pushing changes directly to the production instance.

## Add, Commit, and Push Changes to branch
After code changes, the assigned dev must strictly follow the process of pushing code changes to the remote branch.

In your terminal run:
```
git checkout <branch> <-- make sure you are in your feature/working branch
git pull origin main <-- you can change main to your latest branch (e.g feature-staging)
git add <filename> <-- individual adding of files or
git add . <-- to add all your changes
git commit -m "Insert a descriptive text of your code changes here"
git push
```

## Merge branch to feature-staging (deploying to UAT instance)
After code review, once approved by the reviewer. If the MR doesn't have conflict and is ready for merging.

- [ ] Enable Delete source branch and Squash commits (optional)
- [ ] Click "Merge" from the MR

**Next Steps**\
Once merged the CI\CD pipeline will automatically run and deploy the changes to the staging/uat instance. _(This is currently in progress)_

_**Note:** Avoid merging multiple MRs all at the same time to avoid CI/CD pipeline issue. Wait for the current MR to finish the jobs before merging another MR._

## Merge feature-staging to main (deploying to production instance)
After changes have been made to UAT and tested thoroughly without any issues

- [ ] Create a new Branch [From this link](https://gitlab.com/wrldcapitalholdings/wchhris/-/branches/new)
- [ ] Name the branch with the release version (e.g. release-1.0.0)
- [ ] Select feature-staging in "Create from" list
- [ ] Create a new Merge Request for the release version and target the **main** branch
- [ ] Merge all merge requests from feature-staging to the release MR
- [ ] Fix merge conflicts (if there's a conflict)
- [ ] Merge **release** branch to **main**


**Next Steps**\
Once merged the CI\CD pipeline will automatically run and deploy the changes to the production/live instance. _(This is currently in progress)_

_**Note:** Make sure to merge all feature/working branch to the release branch before merging it to the main branch and avoid merging multiple MRs all at the same time to avoid merging issues._
***

# Editing this README

**EDIT THIS README.md file to include other project details and information**

## Suggestions for a good README

Every project is different, so consider which of these sections apply to yours. The sections used in the template are suggestions for most open source projects. Also keep in mind that while a README can be too long and detailed, too long is better than too short. If you think your README is too long, consider utilizing another form of documentation rather than cutting out information.

## Name
Choose a self-explaining name for your project.

## Description
Let people know what your project can do specifically. Provide context and add a link to any reference visitors might be unfamiliar with. A list of Features or a Background subsection can also be added here. If there are alternatives to your project, this is a good place to list differentiating factors.

## Badges
On some READMEs, you may see small images that convey metadata, such as whether or not all the tests are passing for the project. You can use Shields to add some to your README. Many services also have instructions for adding a badge.

## Visuals
Depending on what you are making, it can be a good idea to include screenshots or even a video (you'll frequently see GIFs rather than actual videos). Tools like ttygif can help, but check out Asciinema for a more sophisticated method.

## Installation
Within a particular ecosystem, there may be a common way of installing things, such as using Yarn, NuGet, or Homebrew. However, consider the possibility that whoever is reading your README is a novice and would like more guidance. Listing specific steps helps remove ambiguity and gets people to using your project as quickly as possible. If it only runs in a specific context like a particular programming language version or operating system or has dependencies that have to be installed manually, also add a Requirements subsection.

## Usage
Use examples liberally, and show the expected output if you can. It's helpful to have inline the smallest example of usage that you can demonstrate, while providing links to more sophisticated examples if they are too long to reasonably include in the README.

## Support
Tell people where they can go to for help. It can be any combination of an issue tracker, a chat room, an email address, etc.

## Roadmap
If you have ideas for releases in the future, it is a good idea to list them in the README.

## Contributing
State if you are open to contributions and what your requirements are for accepting them.

For people who want to make changes to your project, it's helpful to have some documentation on how to get started. Perhaps there is a script that they should run or some environment variables that they need to set. Make these steps explicit. These instructions could also be useful to your future self.

You can also document commands to lint the code or run tests. These steps help to ensure high code quality and reduce the likelihood that the changes inadvertently break something. Having instructions for running tests is especially helpful if it requires external setup, such as starting a Selenium server for testing in a browser.

## Authors and acknowledgment
Show your appreciation to those who have contributed to the project.

## License
For open source projects, say how it is licensed.

## Project status
If you have run out of energy or time for your project, put a note at the top of the README saying that development has slowed down or stopped completely. Someone may choose to fork your project or volunteer to step in as a maintainer or owner, allowing your project to keep going. You can also make an explicit request for maintainers.