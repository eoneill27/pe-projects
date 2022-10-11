# Emily's Daily Journal

## October 10, 2022

### Standup

Today is Canadian Thanksgiving here and also Indigenous Peoples' Day in the US. I've been streaming KEXP radio and their morning show is playing a pretty great Indigenous Peoples' Day program right now. You can check it out at kexp.org.

I thought I would do some work yesterday, but I pretty much took the day off and that was good. On Saturday, I got Cyberduck set up and moved my project files over to the PE Projects server. I think it all went pretty smoothly for me. 

Today I'm glad we have what seems to be kind of a catch up day. Apart from the exercises, I want to take a look at Divvy and get that going. My windows tend to not be well-arranged and it will be nice to have a way to manage that. I also want to collect some helpful design-related links in my portal, like the Sorted CSS Colors and Safe Web Fonts pages - I'd like to to have resources like that all in one place. 

No blockers!

### Today's lesson

Rubber duck debugging - a method of debugging code by articulating a problem in spoken or written natural language. Teaching someone or explaining to someone who knows nothign about programming forces evaluation of the problem from different perspectives and can provide a deeper understanding. Explaining to an inanimate object is fine!

If you run into a problem - go back to the last bit you are sure of. Start there and write out each of the steps/thoughts until you get to the point where you are stuck. Say it out loud as you write and think. Sometimes you'll answer your own question. If not, you'll have a clear thought process outlined so when someone else is ready to help  you, the context is clear.

Pair programming - 2 programmers work together at one workstation. 1 driver writes the code, 1 navigator/observer reviews each line of code as it is typed in. Switch roles frequently. 

We create better software if we work in a series of small steps.
Frequent small commits
But don't really want to commit code without review.
Pair programming allows for continuous review.

Programmers don't know everything - but they do know how to look everything up.

Listen carefully to other people's questions.

### Git Tower

Got the Tower license from Derek. Seems really easy to navigate - friendly interface that makes it simple to stage files and then commit them. Lots of space for a detailed commit message. Notes from the intro documentation - 

- when crafting a commit, it's important to only include changes that belong together. Never mix up changes from multiple, different topics in a single commit. Fixing 2 different bugs should produce at least 2 separate commits. 
- When developing a larger feature, every small aspect of it might be worth its own commit.
- Small commits that contain one topic make it easier for members of your team to understand the changes - and to possibly undo them if something went wrong.
- But often you will work on multiple aspects in parallel - can't always guarantee that you make changes for one and only one topic. This is where the staging area comes in - allows you to determine which of your local changes shall be committed. Changes that were added to the staging area will be included in the next commit.
- Write good commit messags. Begin with a short summary of your changes. The body of the message should provide detailed answers to the following questions: what was the motivation for the change? How does it differ from the previous version?
- Never commit something that is half done
- Don't commit code that you "think" is working - test it well before you commit it to the repository
- Commit often - make it a habit

### To-dos

- [x] Divvy
- [x] Add design links to portal
- [] Add to visual inspiration folder
- [x] Work on inline styles
- [] Choose your own adventure
- [x] Go for a long walk


## October 8, 2022

### Standup

Yesterday I explored some additional HTML tags and played around with them in my 4-page website. I understand block and inline display better than I did before - the visuals in the lesson were very helpful. 

This weekend I want to spend some extra time going back over Milestones, working on sprucing up my 4-page site and my portal, and tackling the choose your own adventure exercise. I'm feeling like I'm on top of the lessons, but I haven't had much time to do anything extra. Monday is a holiday here and I have Tuesday off, so I've got four days coming up where I'll have considerably more time to devote to the extra stuff.

I started reading The Design of Everyday Things last night. I saw an instance of very bad design in a Paris hotel - I'll post it today. I was reminded of it when he was talking about doors at the very beginning of the book. 

### Today's lesson

Take a breather. Things are going really well! 

Inline styles
text-transform
background-color
margin
padding

FTP - downloaded Cyberduck, got it set up, added files to the alpha-net.
FTP client opens a connection to the server and gives you an interface to drag your files over to that server. 

Chatted with Derek. He reassured me that the Milestones are nothing to worry about. Look at them if you're interested and/or have time. The pink ones are the only ones that are more immediately actionable. The course should feel bite size. He said everyone in the class is doing really well - the group is notable for its positivity, support and high level of engagement.

Derek has an idea to create a map of books for the course - recommended readings but linked to prerequisite readings, maybe linked to author videos/talks/podcasts. If you're thinking about reading this book, watch this video first. Interactive collections. What books in what order? Might be a good project for me to work on. Would learn about relational databaes. 

### To-dos

- [x] get FTP set up
- [x] put a file up on the alpha-net
- [] work on inline styles 
- [] choose your own adventure


## October 7, 2022

### Standup 

Yesterday I worked on my web portal, which was really fun. It definitely needs some refinement - I want to include the sites that I access every day at the top. And I want it to look nicer! It will be an ongoing work in progress. 

Going through yesterday's lesson, I was struck by a couple of things:
- Get used to leaving your ego out of it and following the requirements as a first priority. This is a great piece of advice.
- I had no idea that "target" can be set to something other than _blank, _self, _parent, or _top. I don't know how often I'll do it, but I like knowing that I can make links open up in the same tab.
- I really want to watch Halt and Catch Fire.

Today, more HTML - I'm pumped to add some styling to my web pages! 

Personal side note - it's the first day of the MLB playoffs and the first time the Mariners have been in the post season since 2001. I am prepared to have my heart broken again, but I am also so hopeful and excited! Go Mariners!

### Today's lesson

HTML display types
Block elements stack
Inline elements go in a line and wrap

Default display types can be changed with style attribute

Don't forget that Headings are not about styling - they are about describing the hierarchy of importance

p and h elements should not have lists inside - but lists can include both of those things

### To-dos 

- [x] discover new HTML elements
- [x] break down printed material
- [x] improve project websites


## October 6, 2022

### Standup

Yesterday I practiced using Git to open my daily journal and made sure my repository was still working the way I think it should. I had a little snafu with my course folder - I've been saving everything but pe-projects in a DFTW folder on my desktop, which I thought was actually a Google Drive alias file. In fact, I had a different folder called DFTW on Google Drive, which had different content than the other one. I got the two merged and now I have a Drive alias folder on my desktop for course notes and miscellany. I'm glad I caught it when I did.

I've really enjoyed reading everyone's Substack posts. A huge part of why I wanted to join PE was because I read every Substack post from current and past students that I could get my hands on, and I found them really interesting and inspiring. Now that's us! I'm sure we'll be part of some future student's research and preparation somewhere down the line.

No blockers today. 

### Today's lesson - Research & Web Portals

Get used to leaving your ego out of it and following the requirements as a first priority.

WWW Virtual Library - the oldest catalogue of the web

target can be set to a unique name - 
target="food" would open link in new tab called "food"
I HAD NO IDEA!

*note - I tried this out and found that the name of the tab remained whatever the title of the website is - but it did result in all links with the same target opening in the same tab. This seriously cuts down on the number of open tabs I end up with, so that's really cool!* 

Watch *Halt and Catch Fire* 

Jake recommended Glow for terminal - to view .md files

Alina recommended The Jealous Curator

### To-dos

- [x] research 40 minutes. Find great websites & put them into groups.
- [x] write about your research process for 10 minutes.
- [x] research business card websites. Find 5 examples
- [x] create Google Doc for those - take screenshots of each. Write down what you think the goals of the site are and how successful they are.
- [x] build web portal
- [x] set web portal to be home page

### Questions

Am I doing the right thing by using a User Profile that does not have admin privileges?


## October 5, 2022

### Standup

Yesterday I configured my iTerm, got it to open directly in my pe-projects directory, and also set it up to be able to open files in Sublime Text, which I think is really cool. I also changed some settings in Sublime Text and installed Emmet. 

One thing I'm confused about in Sublime - what is the difference between having "Indent using spaces" selected and not having it selected? If you hit tab either way, the cursor indents whatever number of spaces you have set the tab width at - right? I don't think I see a difference in how the text editor behaves when this setting is selected or unselected, but I am certain I am missing something! 

I'm enjoying the HTML reinforcements and practice. I see that we're heading in a slightly different direction today, but it's all related to the overarching goal of creating a personal business card website. 

A blocker yesterday was looking at the Milestones page and feeling a little overwhelmed. I know that we're not necessarily expected to get through everything on the Milestones page every day, but I want to - I have to accept that it's not always going to be possible, but it is going to be there for me to return to when I have time.

### Today's lesson - Networking

I get a little nervous when it comes to networking. I think it's due to some imposter syndrome. Really putting myself out there and having confidence in this thing that I've barely begun makes me feel uncomfortable. I also haven't told anyone at work that I'm doing this - I need to get on that, pronto. It's real, it's what I want, so I need to own it even though it is a little hard.

### To-dos

- [x] create Substack account
- [x] write an article and publish it (30 minute limit)
- [x] network flow chart in Whimsical

## October 4, 2022

### Standup

Yesterday I learned about some different file types. I hadn't realized that SVG files took up so little space relative to JPEG and PNG files - that's pretty awesome. Also, really neat that the code can be modified so easily after the fact - I'm looking forward to learning how to do that.

I also learned that Macs with M1 and M2 chips restart the PRAM by default when you shut down the computer and turn it back on. 

HTML was a bit of a review for me yesterday, but I had fun doing the exercise - I like HTML.

And I set up a git repository in my pe-projects folder and got my daily journal going.

More HTML today! I'd like to poke around MDN a bit - I've dipped in before, but only for really specific questions and I'd like to get a better overview of the site.

No blockers!

### Questions

- how do I change preferences/settings in Sublime? Specifically, how do I make the tab size stick? (note - I watched Derek's video and figured it out)
- what is the difference between "indent using spaces" and "indent using tab?"

### To-Dos

- [x] review HTML doc structure
- [x] create 4-page website
- [] browsing with a keyboard challenge
- [] check out MDN


## October 3, 2022

Started on HTML today. It's a review for me, but fun to do, fun to be working on a bit of code. 
- h1, h2, p, ul, ol

I watched the video about the problems with VSCode [The Biggest Threat to Innovation of Our Time] (https://youtu.be/mjY5qND8c7U) and wrote this down - "A fair market ensures that innovation takes place." When a giant corporation makes something free, they are not doing it out of a charitable impulse, and they are making sure that they've cornered the market. Of course, we still use Gmail, Google Fonts, and Github. But I thought the point made in the video was a good one, and it definitely makes me think twice about blindly choosing the free option.

File types - the extension tells the parser or the program opening the file which rules to follow
- JPEG, PNG
- SVG
- plain text 
- Rich Text (RTF)
- HTML

UTF-8 - widely accepted, make sure your code works everywhere. 

Looking forward to getting the license for Affinity Designer!

Git seems to be working for me. I'll commit this to a new repository that I've created on my Desktop - I'll have to check in to see if I should be saving this journal somewhere else. 