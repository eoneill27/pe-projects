# Emily's Daily Journal

## December 2, 2022

### Stand up

Yesterday I got MAMP set up and converted an early project from HTML files to PHP files. I also worked on my personal page a bit - I added a grid and some fun colors. I'm not totally sure where I'm going with it yet - that will be a good thing to talk to Derek and Ivy about.

Today I want to think about which projects to flesh out and tune up. I also want to think about how to display them on my personal site. I keep saying I'm going to get to my business cards and I keep not doing it. That is a good project for this weekend. 

No blockers today - happy to take a few days to assess and consolidate.

### Today's lesson - 082: Consolidation weekend, part 1

### To dos 

- [x] Set up consolidation meeting
- [] Check in on your projects and files
- [] Identify any blockers
- [] Organize your visual inspo folder
- [] Check in with your goals

## December 1, 2022

### Stand up

I can't believe it's December already! Yesterday I read the lesson, read the articles from the lesson and checked out CSS Discord and Stack Overflow. I found it helpful to think about how to ask good questions because what it really boils down to is how to think through a problem. What steps should I take if I'm running into trouble? I like having a method to follow. Research is always my instinctive first step, and thinking through the question is very helpful for successful searching. Knowing that there is a whole huge community out there that is happy to help answer a well-thought-out and well-crafted question is very comforting! 

Today - MAMP. I don't know what this is! This is exciting. I did not do my business cards yesterday - I am going to try to do them today, but I am also going to go to work and then try to wrap my head around MAMP and PHP, so we'll see how it goes.

No blockers today. I continue to triumph over this nascent cold.

### Today's lesson - 081: Setting up MAMP

MAMP = Mac Apache MySQL PHP
(linux version = LAMP, windows version = WAMP)

Apache HTTP web server
Apache is the software that works out the exchange when you send an HTTP request to some distant computer - the computer has to decide if it should send back the file you requested. Is it safe? Is it allowed?

MySQL - a database management system
Stores structured data and allows you to retrieve it
SQL - Structured Query Language
Very widely used database system

PHP - server-side scripting language
Script = a list of directions to help automate tasks so the computer can run them
The server is the computer you're requesting things from
When you ask for something, the server runs some tasks and prepares a document to send back to you. PHP is the type of file you'd write to author those scripts. Mostly used to generate HTML.

When you request a file from the server, it will look for a PHP file. If there isn't one, it will look for an HTML file.
If PHP file - it will read it and follow directions - the usual end result is a complete HTML page

We use "partial" .php files to break the HTML file into manageable pieces. Then the server stitches them together on the fly.

One master index.php file that includes other smaller parts of the project - all into a final complete HTML doc

Can't select "view in browser" for a PHP file
Need to view files on local server
Tell MAMP what you want it to consider your server's root folder, turn MAMP on, then navigate to localhost:8888 to see your files "served" up

MAMP is a GUI that helps you administer the Apache, MySQL, & PHP areas of your computer 

<?php
	?>
Inside of this - write your PHP

similar to style tags - inside of those, you write CSS in an HTML doc (a different language inside an HTML doc) 
Same principle with PHP

<?php include(''); ?>

include() is a function
very similar to @import in CSS

QUESTION - why is it a PHP file when it is primarily HTML, just with one small section where you've written some PHP? When we include CSS in a style tag, it's still an HTML document.

### To dos 

- [x] Get MAMP downloaded and running
- [x] Try out PHP partials

## November 30, 2022

### Stand up

Yesterday I finished watching the responsive layout challenge walkthroughs, worked a little on my brother's site, and then had to call it a day. I feel like I'm fighting off a cold and I have been very tired.

Today I'll be reading lots about how to ask good questions. I'd like to get to the business card exercise, if not today then definitely tomorrow. 

No blockers! Just drinking lots of tea and trying really hard not to get sick.


### Today's lesson - 080: How to ask a question

You know a lot of stuff
You know a lot more than you did 2 months ago!

If you want people to show you empathy, you need to take the time to show that you care to compose yourself

Our brains can feel like we totally get it even when we totally don't

Use CodePen to tell a story
Create a really simple version of what you're trying to do
Create the tiniest version of the situtation you possibly can
Strip it down to the amount of code you need
Same goes for graphics program questions

What do you want?
What have you tried so far? 
Maybe draw a picture
Don't ask without trying

Where should you ask?
CSS Discord - very fast - also for HTML
Stack Overflow - just about code - for big questions
Dev.to & CodeNewbie - open-ended questions

"vertically align children of parent div" is better than "vertically align menu items"

Brace yourself
THe help you'll get (and the time saved) will be worth the crabby banter

#### Stack Overflow article - "How do I ask a good question?"

search & research - keep track of what you find, even if it doesn't help
If you aren't able to find the answer somewhere else on the site, including links to related questions and explanations of why they didn't help in your specific case will help prevent your question from being marked as a duplicate

write a title that summarizes the specific problem 

Introduce the problem before you post any code

Help others reproduce the problem with just enough code
Don't post images of code - copy or type the text into the question
Reserve the use of images for things that are impossible to describe accurately via text

Include all relevant tags - language, library, specific API(s) 
If you use a version-specific tag, also include the main non-version specific tag

Proofread before posting

Respond to feedback after posting

#### Stack Overflow article - "How to create a minimal, reproducible example"

People are better bale to help if you provide code that they can easily undrstand and use to reproduce the problem

Community memners refer to this as:
reprex - minimal, reproducible example
meve - minimal, complete and verifiable example
mwe - minimal, workable example

Minimal - use as little code as possible that still produces the same problem
Complete - provide all parts someone else needs to reproduce your problem in the question itself
Reproducible - test the code to make sure it reproduces the problem

If you're not sure what the source of the problem is, start removing code a bit at a time until the problem disappears - then add the last part back

The problem might not be in the code you think it's in - include all of the relevant code (html, css, javascript)

Use individual code blocks for each file or snippet you include. Provide a description for the purpose of each block. - See "markdown help"

Use stack snippets to include runnable HTML, JS or CSS

Validate your code

#### The XY Problem

Problem occurs when people get stuck on what they believe is the solution and are unable to step back and explain the problem in full

Always include info about a broader picture along with any attempted solution

If there are other solutions you've ruled out, share why you ruled them out.

#### CSS Discord

October 12 comment from webstrand - "The point of CSS is to override the display of elements while keeping their semantics."

Display: contents makes the children of the element display in the parent, as if they were children of their grandparent instead.
This allows you to take something like [code]table[/code] and lay out its rows and columns using display: grid

Learn about negative margins

### To dos

- [x] Get a stackoverflow account
- [x] read posts
- [x] check out CSS Discord - what do you notice about the question asking style?
- [x] spend some time digging around on stackoverflow - what can you do? what can't you do? how do you feel about that? Check out CSS tag. takeaways?

## November 29, 2022

### Stand up

Yesterday I watched the first set of responsive layout challenge walkthroughs. It's good to have the refresher after a week off, and I'm also making notes of little tips and tricks. I always find it really interesting to see how Derek approaches these challenges. One thing I realized I had been doing was changing the inner-column width for each breakpoint - and while watching the first video I quickly realized how unnecessary that is. The visually-hidden class was another big takeaway for me. I also didn't know about the "New from clipboard" trick in Affinity - nice to have a canvas that is the same size as your thing!

I took the opportunity provided by the low-key day yesterday to visit Ann and her family after work - I used to be over there for dinner a few times a week, but not anymore! On top of everything else that's going on, she's had a tough recovery from her gallbladder surgery and is just starting to get back to normal. Last night was the first time in almost two months that we had a normal family dinner, and that was very restorative. 

Today I'll watch the next two walkthrough videos and should have time for some extra stuff this evening. It's supposed to snow quite a bit this afternoon, so I might be walking home from work, but I should be available by 6:45! 

No blockers today.

### Today's lesson - 079: Layout challenge walkthrough part 2

Background image on div

If you make module inside inner-column, it's totally transferrable
section - inner-column - plan-grid - plan

Can also create a module with inner-column included

Sometimes you need to wrap something in a div. That's ok!

If you put @media with the relevant section instead of everything at the end, then you have a reusable component.

display: grid;
grid-template-columns: repeat (auto-fill, minmax(200px, 1fr));
grid-grap: 1em;

fr = fraction

background-image:
background-size: cover - tries its best to cover the background of the container

transition: opacity 1s; (fade in)

pointer-events: none; - makes element invisible to mouse

@media (min-width: 480px) and (max-width: 799px)
This is possible but can get confusing

Can have more than one inner-column

Can search Sublime Text with cmd + F

even if you're a gung-ho grid person, there are still great uses for flex

section-plans:hover .cog {} - any cog inside section-plans, do this to it when you hover over section-plans

Sometimes position: absolute makes things forget what width they're supposed to be. Give them width: 100%, and max-width: whatever number of pixels


## November 28, 2022

### Stand up

On the break, I didn't do quite as much work as I thought I would - but I did do the second responsive layout challenge and I got started on my brother's website. I went down to Washington to stay with my family for Thanksgiving, and he and I talked about the site a bit. He gave me a few sites that he likes the look of, so I'm going to work with his ideas to hopefully make something that makes him happy. He also gave me a nice office chair, so I am much more comfortable at my desk.

I watched the layout challenge walkthroughs this morning - I hadn't watched them all the way through yet, so this was good. I made note of a few tips and updated my CSS reset files with the visually-hidden class. I'm going to spend some more time on my brother's site this evening.

No blockers!

### Today's lesson - 078: Layout challenge walkthrough

custom elements are default display inline - need to change them to display: block

inner-column { display: block; width: 100%; max-width: 1200px; margin-right: auto; margin-left: auto;} - don't need to keep changing the inner-column width at breakpoints

sometimes might want to hide content for accessibility. Section should have a heading for accessibility, but don't necessarily want the heading to be visible. Can create .visually-hidden class in setup.css for things that you want to have read by a screen reader but not appear on page visually
Google "hide content a11y"

pictures that are purely for decoration don't need alt text

take screenshots of your desktop for placeholder images

In Affinity - copy whatever - then go File > New from clipboard - this will give you a canvas that is exactly the size of your thing

In HTML - anything you put lower in the doc structure is going to take precedence as far as layering goes

CSS positioning - can use percentages
top: 70%
left: 70%
The thing will move around a little when resizing the page. Use px for more precision.

## November 19, 2022

### Stand up

Yesterday I zipped through the exercise pretty quickly, then finished the flexbox exercises and started sketching out the elements of today's challenge. The desk is operational! The photos show the set up before and after, including my table restored to its usual smaller size.

Today I actually have to go into the office to do a first aid shift - I am on the first aid team, and if there are more than 20 people in the building we need to have a first aid attendant on site. There is some committtee meeting happening today, so in I go. That's ok, though, because my only job is to wait around in case someone needs a bandaid, so I'll be able to continue working on the challenge. I'm having fun with it so far - we have come a long way!

No blockers today.

### Today's lesson - 069: Super responsive layout challenge

Various modules inside inner column

There is no perfect breakpoint - depends on the layout

One color for background
use RGBA to create transluscent layer over header
Footer has some black 
This allows you to change just the color of the background to make a pretty significant visual change

Display: none - at certain breakpoints, might want to hide or show an element

Overflow: scroll
Overflow: hidden - might want to use this

### To dos

- [x] Super responsive layout challenge

## November 18, 2022

### Stand up

Yesterday I watched Ellen's typography class and took some notes. I also worked on creating CSS type classes in my practice boilerplate and got my module inserted into that. It's nice to see how the module concept works - I had to spend some time tuning it up once it was in the boilerplate, but it's certainly a lot faster and easier than writing all of that code from scratch every time. 

Today I will absorb the lesson on CSS positioning and hopefully complete the challenge relatively early on in the day. I want to continue to practice flexbox and to think about tomorrow's challenge.

I'm buying a desk from Craigslist after work today, so the next time you see me I will not be working on my kitchen table. My apartment is so small that my "dining room" is really just a small space between my sofa and my kitchen. There's a tiny little sun room off my tiny little living room, which is where I will put the desk. It requires finding some other place for the record cabinet and the chair I have in the sun room - that other place doesn't really exist, but I think it will be nice to have a real desk! 

### Today's lesson - 068: CSS Positioning

By default, everything is position: static
Each element flows based on its display type and doesn't have any position settings

Sticky - great for site headers

Fixed - based on the browser window (the viewport)
Bottom:0 and left:0 will be at the bottom left of the window no matter what - fixed to that position even if you scroll or resize
Can't use it to fix something in a section because sections change
Sits on top of the content and is fixed in that position all of the time - not usually a desirable outcome
Great for full screen takeovers or unique/artsy layouts
Elements with this positioning leave the document flow
Thing of them as being on a new "layer" 
You can visually stack things
Old spot in the document flow collapses
Mostly used for pop ups and full screen mobile menus

Relative - positions element based on its natural place in the document flow
Will hold its place in the flow, but visually will move a little away from there
Your coordinates will be relative to where it is expected to be
Ends up feeling a lot like margin
You are moving it away from a position instead of aligning it to a boundary
Rarely used - prefer transforms

Absolute - depends on the closest parent element with position relative
You can position the element anywhere depdning on that context
Will align to the body element by default
Similar to fixed except you are choosing what element context you want it to be fixed to - instead of the browser window edges
Old spot in the document flow collapses 


### To dos

- [x] positioning exercise
- [] supplementary exercises from Derek

## November 17, 2022

### Stand up

Yesterday I observed flexbox and responsive design in the wild. It is definitely something I'm attuned to now - if someone were to walk by my desk at work at the moment I arrive at a new website, they would probably think it pretty strange that I keep making the screen big and small and big again. I am going to try to continue to pay attention to this and make note of interesting layouts. 

Today is another typography day! I'm excited about that. I had no extra time yesterday but I hope to have a bit today, so I will try to get a blog post sketched out after I finish the lesson.

No blockers today.

### Today's lesson - 067: Exploring typography

Think about your goal when you're choosing a font

Ellen Lupton - Thinking With Type (book) 

When you work on your business card - don't just pick a font
First, pick a feeling
What feeling do you want to convey?
Can you visually align it with what you're interested in?

Ellen Lupton - Typography That Works

Sans serif - Futura, Gill Sans, News Gothic, Franklin Gothic, Helvetica, Univers, Gotham
Gill Sans was a deliberate counterpoint to Futura - a more humanistic version of sans serif 

Find a nice big family that has all the weights you want

Graphic design is all about alignment

We use a grid so we have a system for objects on the page to be anchored to one another
Creates a mix of uniformity and variety

centered - you're not dead yet
justified - can be full of holes - "rivers" have to work hard to make justified type beautiful
flush left - organic - be aware of what the ragged edge looks like
flush right - more unusual - gives it a real dynamism

centering all your elements can be static and dull

Elements floating toward edge of the page - not aligned to anything - not such a good idea

Elements aligned to one another - creates an internal structure that comes from the content and not just the margins of the page

line spacing is important
creates texture

If you use too many types of emphasis or if you emphasize too much, nothing ends up looking important

A business card is a typographic portrait

Align text to the top of the x-height, not the cap height

Serif - Garamond, Baskerville, Mr. & Mrs. Eaves, Didot, Bodoni

Tracking - often nice when added to caps
less nice when added to lowercase letters, especially italics, which are designed to sit rather closely together

Kerning adjusts the space between a pair of letters

small caps - same height as lowercase letters - only use when they are officially included with the type family 
Pseudo small caps are a type crime - "an abomination against nature"

non-lining numerals integrate well with text - they have ascenders and descenders
lining numerals don't break the line

Drop cap - enlarged letter at the beginning of a line

Slab typefaces - lend themselves to decorative variation
merge of sans and modern serif 

Not all slab faces are decorative - Clarendon, Century Expanded, Thesis Serif

Trilogy combines sans, serif and slab

Slab serifs love the web - Adelle, Kultura, Museo Slab 

www.typography.com - How to Mix Typefaces - Hoefler and Frere-Jones



### To dos

- [x] watch Ellen's series, take notes, write down font names
- [] business card exercises with sans-serif
- [] business card exercises with serif
- [x] make some type patterns in CSS - names for classes, add to css
- [x] try to move module into skeleton for practice

## November 16, 2022

### Stand up

Yesterday I spent a lot of time working through the flexbox exercises, which I thought were really fun. My first attempt at the challenge in Flexbox Part 1 ended up looking fine, but there was a lot of extra code in there - I had a feeling there was an easier way! And it was so illuminating to see Derek's solution. I had forgotten about/never used nth-of-type. Now it's burned into my brain! 

I got through 2 of the 4 variants of the first bigger challenge in Flexbox Part 2 - would like to finish that today, if possible. I have been trying to blog on Wednesdays but don't know if I'll have time for that today - I'll try to write up an outline, though. 

No blockers! Working towards Sandals.

### Today's class - 066: Flexible layouts, modules and components

Start thinking in modules and components
Start thinking in "break points"
Start thinking about the smallest screen as the main stage

component = a thing that you compose to build bigger things (special button, form, small collection of elements)
module = a collection of components
reusable

When planning out a module/component, need to think it through on all screen sizes
If you write the HTML as cleanly as possible, in the classic style for the smallest screens, then you can usually just make a few adjustments as screens allow for more layout possibilities and it all falls into place (with practice)

Some websites have completely separate mobile site - if/then statement when you visit their site that sends you to the right place
Some have one codebase - this is what we're doing
Good reasons to do both

In Affinity - you can lock a layer so you can work on top of it without accidentally dragging things around.

For an actual grid - there are a few lines of CSS that you can use to make it really easy

Custom elements are default inline

Flex-basis: 50% - will ask the content to try to take up 50% of the container
It will try to achieve the size, but if it can't, it won't break
Can also just use width:50%

Adjacent selector - any element that includes the specified class
element.class

Modules are like skeltons - plug it in, fill in the data

### To dos

- [x] find examples of responsive modules in the wild - good layout patterns (30 mins)
- [x] mock up some ideas for responsive layouts (20 mins)
- [x] write up a module in CodePen (40 mins)

## November 15, 2022

### Standup

Yesterday I finished the lesson and got started on today's. I was pretty zonked by 8:30 or so, so I shut things down around then.

Today, very excited to get into the flex challenges. I like the challenge model - I enjoy testing my knowledge in this way. This is a fun week so far! 

No blockers today. I keep running late to work because I have a hard time leaving the lessons behind in the mornings.

### Today's lesson - 065: The Flexbox Layout (Flexible Box) Module

Flexbox allows things to be flexible and change size
Also helps align things

The CSS cascade doesn't impact display

Flexbox creates new layout context between parent element - "Flex container" - and the direct children - "flex item"

flex-direction - row, row-reverse, column, column-reverse

justify-content - center, flex-start, flex-end, space-between, space-around, space-evenly
defines alignment along the main axis

align-items - center, stretch, flex-start, flex-end, baseline
defines alignment along the cross axis (perpendicuular to main axis)

with Emmet - div.orange>div.yellow makes div with class "yellow" inside div with class "orange"

:nth-of-type(1)
:first-of-type

flex-wrap: wrap


## November 14, 2022

### Standup

On Saturday I thought about some of the gaps in my knowledge so far, and made a plan to set aside time each week to go through Affinity Designer tutorials. I also spent some time cleaning up my desktop and closing windows. I feel like things are much tidier now, which feels good. Yesterday I went through a couple of the milestones. I had started reading Hello Design World - I finished that and took notes - I thought that was a good resource, and a helpful system for thinking about the process of web design. I also watched Chris Coyier's talk on how to think like a front-end developer. It's interesting to think about how broad that term has become, maybe to the point that it doesn't make much sense anymore as a stand-alone phrase. Maybe we have to be much more specific about what we're calling ourselves if we do fall under the umbrella of front-end developer.

Today I've started going through the lesson and am really enjoying it so far. I like the refresher, and I like getting back to the code. I have to head to work - I am late! But I'll finish it up this evening. If I have time tonight, I do want to get started on a redo of my Challenge 1.

No blockers today!

### Today's lesson - 064: Planning layout work-through

When we link CSS doc to HTML doc, we're making a relational connection - HTML doc knows to load and apply stylesheet
@import - still makes a network request
imagine it as cutting out the Meyer-Reset and just gluing it directly into the CSS doc right when the browser is ready to load the page

[&nbsp Non-breaking space (no bracket at beginning - starts with ampersand) - puts a space between two things that won't break. If you don't want two words to break away from each other over two lines, use this between them in the HTML

CMD + /  - comment out

header can go inside main

add background color to selector with background image using RGBA to make text on top more legible

text-shadow
box-shadow (x-axis, y-axis, blur, distance, color)
box-shadow: 0 2px 5px 0px rgba(0,0,0,.4);

sticky header
position: sticky;
top: 0;

.site-header .inner-column {} - targets only the inner-column class in the site-header class

flex display allows all children to be flexible

make whole body display: flex - a flex container
flex-direction: column; min-height: 100vh;
then page-content flex-grow: 1 (1 = true, 0 = false)
This stretches the page content section so it fills the page and pushes footer down - keeps footer at bottom

### To dos:

- [x] video tutorial

## November 12, 2022

### Standup

Yesterday I also had fun continuing to play with SVGs. This is an area that I want to spend a lot more time with - it would be nice to have a few reliable SVG tricks up my sleeve.

Today I'm going to think about gaps and make a plan. I'm also thinking about redoing Challenge 1 in light of everything we've learned since then.

No blockers!

### Today's lesson - 062: Fill in the gaps

### To dos:

- [x] identify gaps in knowledge, think about big picture of where you're at
- [] revisit your personal reflection/marketing plan
- [] update Goals CSS
- [] resume
- [] milestones

### Stuff to read:

- [] Modern fluid typography using CSS clamp (Adrian Bece)
- [] Creating a full bleed CSS utility (hankchizljaw)

## November 11, 2022

### Standup

Yesterday I dipped my toes into the SVG waters, and they are warm and inviting. I would like to get weird bear to walk or wave - I'll try to figure that out today! The image prep part of the lesson was also really helpful - I had no systematic way for thinking about that before, and it's nice to now have some rules in place.

Today is a holiday and I can feel everything slowing down - it is so nice to be at the beginning of a three-day weekend. I'm going to make a point of going for a long walk every day.

No blockers today!

### Today's lesson - 061: Further SVG exploration

Pablo Stanley - The Faker You Are, the More Successful You Can Be
Love this. A tthe core, arguing for focus on functionality. Aesthetics are nice, but not if it doesn't work.
Use solutions that work for your goal.
Don't copy Amazon if you don't have an e-commerce site.
Have empathy for your users.
Inclusive design
Users are not a monolith. You are not representative of all your users.
Don't isolate yourself
Don't be afraid of criticism

Designers are just human beings who put in the time and who care about the outcome

SVG code - delete XML stuff at the beginning, doctype, version, space, link serif

g tag - SVG version of a div - way to collect things into groups

transform attribute indicates where the group is on the x/y axis

path tag - a shape

don't forget to name your layers

Bitmap images - a "map" of pixels. A series of tiny boxes.
Vector graphics - a series of points plotted out with math. Drawing instructions that get drawn in the browser

### To dos

- [x] watch Pablo's talk
- [x] create your SVG kitchen sink
- [x] take the SVG code and prep it


## November 10, 2022

### Standup

Yesterday I had fun with the blend modes but need to spend more time playing with those. I ended up registering the emilyoneill.dev domain, just so all those other Emily O'Neills out there don't beat me to it! I like .dev - feels more professional to me than .net, and cooler than .com, but still easy for people to remember (I hope). My name is often misspelled - plenty of people want to spell O'Neill with 1 L instead of 2. Maybe I should also register emilyoneil.dev. 

I'm excited to get into SVGs today. I'll be switching out Beth Electric's lightning bolts this weekend, I think! Time has felt short this week outside of work - I'm looking forward to the holiday tomorrow and the weekend ahead to dig into blend modes and SVGs more in depth. 

### Today's lesson - 060: Creating SVGs and preparing images

SVG - scalable vector graphic
an image defined by numbers as opposed to bitmap images (.jpg & .png) which are made up of little squares.
vector graphics can be scaled up infinitely without degrading quality

name and nest your layers
everything should be labeled

in HTML - change IDs to Class
SVG html is giving file styles with style tag - this will override CSS - take all that out

set SVG to display: block, width 100%, height 100%
fill its parent (picture)
set picture to display block, set max-width

image file preparation - what is the biggest size it will be shown?
double that and drop the quality as far as you think you can get away with
it will be super crisp because it is double the size

in theory, nice if images are around 150kb

making images smaller, or having fewer images, is the easiest thing you can do to make the website faster

For a big background fill image - 2400 px wide is pretty good

60 on the quality scale is usually pretty good

### To dos
- [x] draw an SVG - try and use a few fills and a few strokes
- [x] prepare the SVG code - tune it up so you can use CSS to style it
- [] practice preparing bitmap images
- [] work on alpha-6 mood board

## November 9, 2022

### Standup

Yesterday I wrangled a blog post out of the latter 3 days of my mock client experience. It felt good to get that off my plate. I might edit it a little today.

Today I'm glad to have some more review and also to learn something new in Affinity and CSS with the blend modes. 

I want to think more about my handles and domain name - I really struggle to think of anything clever and I don't want to force the issue because I don't want to end up with something that feels inauthentic to me. But I'll let it percolate a bit and see if anything comes up. If nothing does, my name is just fine!

No blockers today!

### Today's lesson - 059: Cascade and blend modes intro

Lots of different resets
They don't fully reset things because you can't have zero properties - the intention is to remove styles added by the various browsers

Our own custom PE setup includes box sizing, squishy images, links that can wrap other elements
We do this just to make our lives easier
Make sure you understand these

CSS cascade
Declarations lower down of same specificity take precedence
A more specific declaration will take precedence over a less specific one

Can override a style sheet in a specific html document by using style tag after link to stylesheet
Can be useful for page-specific overrides

Blend modes
Can drag images into Affinity
In layers - image is one layer. Make a new one, fill it with a color. Put image on top of color layer. Different blend modes - next to opacity.
use artboard tool to make the canvas the size you want
Create some texture by adjusting the opacity of the image

### To dos 
- [x] review squishy images and wrapping links pens
- [x] set up Github
- [x] make some blended background images in both Affinity and CSS
- [] update Goals CSS
- [] resume

## November 8, 2022

### Standup

Yesterday felt like a bit of a breather. I got Browser Refresh installed and made my boilerplate. I also got through the "tending your garden" milestone and the GitHub history milestone.

Today sounds like a good day to get my blog post written. I will do my best! 

No blockers today. 

### Today's lesson - 058: Reviews and case studies

Point of the project was not to tunnel vision make a website
What do they really need?

Think about what experience of "viewing" the site is for someone who is not looking at it with their eyes
This comes down to data structure 
How are you organizing your HTML?
What structures do you have in place? 
What is the most important thing for people to hear/see when they get to your site?

Details of the typography will win over all background colors and images.

### To dos
- [x] blog post


## November 7, 2022

### Standup

Yesterday I took a nice break from the computer and hung out with some friends. It snowed a bunch here in the middle of the day, which was crazy - it is way too early for snow in Vancouver. But it didn't stick, fortunately. I'm kind of a drag when it comes to snow - all I can think about is what a mess the roads will be and how hard it will be to get to work. It's hard for me to enjoy snow unless I don't have anywhere to go. Vancouverites are terrible about shoveling sidewalks and there aren't enough snowplows in the city. Anyway.

The challenge last week was great, and it was exciting to dip my toes into flexbox. I'd like to get a blog post up about the second half of the challenge - I'll try to work on that today. 

I just watched the first part of today's lesson and I really appreciated the pep talk. I have been having so much fun doing this and I really do wish I could be in this class for 8 hours a day instead of in my office at my job. I came into this class knowing that I wouldn't have a ton of spare time to hang out and read books and go for drinks after work, that my social life would take a hit for six months or so - but I am trying to switch out my job at age almost 40, which is a big undertaking and something that requires some really focused effort. I just feel really motivated to make it happen. It was nice and encouraging to hear Derek saying these things to me in the video and to affirm for myself that I am enjoying this and that I feel like I'm making a good decision by doing this.

No blockers today! 

### Today's lesson - 057: Tools & habits (gathering)

Use the right vocabulary
Ask good qusetions

create a file in the finder - drag it into Sublime in the dock to start a project and have folder open in sidebar - very handy!

Don't forget about cmd + opt + 2 (or 3 or 1 or 4...) in Sublime

Browser Refresh package in Sublime - allows you to refresh browser from Sublime by clicking cmd + shift + R - SO GREAT!

Self-closing tags - closing forward slash is optional
Maybe it's nice to use? Tells you that the tag ends.

HTML - element, attribute, value
CSS - selector, property, value - style declaration, CSS rule

Github history milestone - 
GitHub is a social network for version control
Allows you to publicly develop code and share that code
It is not the only option (GitLab, Beanstalk, Bitbucket, etc)
Git can be used for any text-based file, not just code

Bootstrap - premade UL library

Package managers
NPM - back end
Bower - front end

GitHub profile - tells a bit of a story
recruiters will probably look at this - but don't freak out about it
Interact with the community

### To dos
- [x] tune up folder structure - what do you actually want to keep?
- [x] create boilerplate - folder w/ starting point docs
- [] blog post
- [] add links to portal - W3C, OG, 

## November 5, 2022

### Standup

Yesterday I refined my design, chose fonts, and had a real breakthrough with the alignment of those boxes but then switched them over to display: flex anyway (so much easier). Lots of little tweaks and experiments were happening yesterday.

This morning I woke up wondering if I'd made a huge mistake with respect to the design. Lots of second-guessing going on here at the moment. Is this what Beth would want? Should I have stuck with a more traditional vibe? Why won't she return my calls? I'm going to send the site to some friends today to get feedback.

But then as I take another look at it, I think - it's really nothing too wild. It is still very normal and basic. Maybe it's fine! This is a good lesson in living with uncertainty.

Today I want to figure out a solution for the contact info being too far down on the mobile site. Maybe it is as simple as switching the welcome copy and the boxes. I also need to get my open graph image together.

### Today's lesson

Document the process - 

My ultimate goal was to create an inaugural web presence for Beth. When I started, I was thinking in a very traditional 4-page website frame of mind. I was working along these lines as I still labored under the delusion that Beth would be responding to my long list of questions. My four pages required details that were not forthcoming. 

After talking to Reputable/Ivy, I changed tacks and started focusing on the essential information that Beth needs to convey in order to bring in customers. I wanted to refer to her family history, her qualifications, her broad range of skills, and make sure her contact information was readily available, all without getting too deep in the weeds of too much detail. 

The look of the site changed a lot - I would love for users to be able to "turn on the lights!" once we learn dark mode capabilities. There is an argument to be made for staid tradition here, but Beth is young, and in my imagination she has a few tattoos and she's a badass lady electrician, so the color scheme makes sense to me. If I ever hear from her, she can tell me to go jump in a lake.

I had so much fun working on this. I'm pretty happy with how it turned out. A few small details can be tuned up, and I can definitely imagine an expansion of the site in the future.

### To dos

- [x] finish Beth Electric 
- [x] document the process

## November 4, 2022

### Standup

Yesterday - Beth Electric. Today - Beth Electric!

I had a good chat with Ivy yesterday evening and got some clarity on the project. I started working on my second prototype and continued on that this morning - playing around with fonts and trying to make it look good on my phone. Still wish I had a photo of Beth and her dad! But I'll get over it.

No blockers today. Again wish I didn't have to go to work, also we're in the middle of an atmospheric river right now and I really don't want to face my bike commute this morning. I guess I do have some blockers, at least when it comes to leaving my apartment!


## November 3, 2022

### Standup

Yesterday I spent a while imagining Beth Electric's back story, coming up with questions to ask, and sketching out some ideas for her site. I sent an email with some of my questions to Reputable Agency but am still waiting to hear back from them. In the meantime, I am going to get started on a prototype so I have something to share and test out with users. 

I want to take a note from Derek and beware of scope creep. Definitely want to try to keep things simple in the interest of delivering something that hits all of the client's goals without getting bogged down in a bunch of extraneous stuff that impinges on my limited time. 

Back to the office today. No blockers apart from having a full time job! I'd much rather spend my day on Beth Electric.

### To dos 

- [x] continue to work on client project
- [x] huddle with Ivy

## November 2, 2022

### Standup

The review yesterday was a nice breather after Monday's challenge. I spent a while going through the Pens and taking notes, really trying to make sure I have these concepts down. I think I do. I had a good huddle with Drew, Alina and Miguel where we talked some things through, which also helped. 

"Everything is a box." I might get it tattooed on my arm. Something I highlighted from yesterday's lesson is that the relationship of the parent and its direct children is what we can use to most efficiently orchestrate the layout. When you're looking at a page of code, I think it's easy to get distracted from these relationships, or muddled about where they begin and end. But this makes so much conceptual sense to me - just have to be deliberate in paying attention to it and practicing it. 

Really looking forward to getting started on this client project. I have taken the day off work - I was feeling pretty exhausted yesterday and was looking ahead to a really busy day and another late night tonight (thanks swim class), so I just said, "forget it!" and slept in a little. I'll be in and out today - Ann had her surgery yesterday and it's her birthday today. She's feeling pretty rough, so I'm not sure if I'll be stopping by her house, but I'll see how she feels later on. I'll definitely be around for a large part of the day, though, and free to chat.

### Today's lesson - 052: Small business part 1

Who is the client? What do they want? What is the simplest thing we can do to get them one step closer to their goal?

**Think about what the client wants and not how other websites look**
stick to the core design methodology

Who would use this business? Who are the clients?

Assess the project - if you needed this service, what would you need to know?

Market research - check out other similar businesses
What is effective or useful?

Client is happy if their clients are happy

### To dos 

- [x] talk to Derek re: Github
- [x] figure out what you need to ask the client - who are they? what do they want? how do you get them closer to their goal?
- [x] what content do you need? what media assets? 
- [x] what story do you/they need to tell?
- [x] make a plan


## November 1, 2022

### Standup

Yesterday all of my PE work was consumed by the Research & Destroy challenge. Before I left for work, I chose a site and sketched out the elements that I would need to recreate. After work, I got to building it. On the one hand, I managed to get the general structure laid out and I feel good about that. On the other hand, all of my deficiencies were revealed! This is great, though - I am really happy to have gone through the exercise and to kind of be able to catalogue what still needs to be learned in order to make a site that will cut the mustard in this day and age. It was a tough challenge, but it was fun and very enlightening.

Today I want to continue to get a grip on what I know and don't know. I think I'll end up with a lot of notes and a big list of questions. 

No blockers at the moment! 

### Today's lesson - 051: The next pieces, part A

Any two elements can have a parent/child relationship

All elements are presented visually by the browser as a rectanble/box
A child is a box inside another box

Lists are boxes
List items are boxes within the list box
List items are children of the list

**The relationship of the parent and its direct children is how we can most efficiently orchestrate the layout**

If you control the width of the body element, you can control the width of its children

It is sensible to break up the content into meaningful sections
It also really helps so you can style those sections differently

Instead of centering the whole body, you can center things inside each respective section

Focus on the right parent-child relationship
Break it down and compartmentalize

Almost everything is a box with some other boxes in it

### To dos

- [x] check back in with display types
- [x] double check your big-picture layout
- [x] get those images under control
- [x] get those link elements in gear


## October 31, 2022

### Standup

Yesterday I took a break from the computer for the first time in a couple weeks, which was nice. On Saturday I really enjoyed the typography lesson and I had all sorts of fun things to tell people about Helvetica at the party I went to on Saturday night. 

Today looks like it's going to be a fun day. I have to go into work today, so I'll do what I can this morning and then I'll get back to it in the evening. 

No blockers today.

### Today's lesson - 050: Research and destroy


## October 29, 2022

### Standup

Yesterday I spent some time thinking about all of the HTML and CSS elements and properties we've learned, and about how even if we only have ten of each, we can still make some pretty great websites. 

I also spent some more time reworking my peprojects.dev landing page and my projects page, and I also tweaked Ann's birthday card to include inner-column. I had some wonky stuff going on in the header before because I was trying to make that whole thing a big link and also centered over the body text, and my code without inner-column got pretty messy. It is vastly simplified now. Using the universal selector and putting a border around everything while I was working on this was super helpful.

I installed the Pesticide extension, too - another great tool that I think I'm going to find really instructive.

I'm very excited for today's lesson. I can see myself getting sucked down a typography rabbit hole, but at least I'll be happy down there. Also on the agenda today - wrestling with the 046 article milestone. 

No blockers today!

### Today's lesson - 048: Intro to typography

Type is the power to express words and ideas visually

Serif - most serif typefaces fit into one of three categories
- old style - thick serifs, a higher contrast between thick and thin strokes
- transitional - thinner serifs, a higher contrast between thick and thin strokes
- modern - very thin serifs, extreme contrast between thick and thin strokes

sans-serif
- geometric sans - Future is an example - based on simple, geometric shapes
- Humanist sans - Gill Sans is an example - gentler, more natural curves

Helvetica - next major innovation in sans serif - simple curves, available in many different weights

For long form reading - 
ideal line length is 50-75 chracters
font size should feel about the same as a well-printed book held at reading distance - typically 17-23 px
longer lines need mnore line height
letters shouldn't collide - but don't want too much line height either
paragraph spacing - more than zero, but less than a full line height
accent text - SLUB pattern - smaller, lighter, uppercase, bold (a size or 2 smaller than body text, opacity/weight 70-90% of original)
space between any related elements should be greater than the space within the group

Helvetica documentary
It is the space between the black that really makes typography (Massimo Vignelli) - the white space matters a lot

1957 - Helvetica - need felt for rational typefaces - underpinned by idealism felt by many designers at the time

Helvetica - neutral - the meaning is in the content of the text and not in the typeface, which is why the modernists loved it

Erik Spiekerman - typomaniac - "an incurable, if not mortal, disease"
why is helvetica still so popular - "I don't know, why is bad taste ubiquitous?"

typefaces are a brand

1970s - reaction against Helvetica
started to seem dull, conforming

Sagmeiseter - why limit yourself to 3 or 4 typefaces? Boring! 

Don't confuse legibility with communication - just because it is legible doesn't mean it communicates 

### To dos

- [x] watch Helvetica film
- [x] find examples of each type of typeface (old style, transitional, modern, geometric sans, humanist sans, etc.) and share with group
- [] 046 article milestone


## October 28, 2022

### Standup

I continued to feel pretty good about the concepts yesterday. I investigated the example portal code and got my challenge-1 site switched over to an external style sheet. I'm looking forward to spending some time refining that CSS and also implementing what we've learned about inner-column and layout in all of my work.

I worked through the article layout exercise in the Milestones - I think I covered all the bases? It's certainly very colorful!
https://codepen.io/eoneill27/pen/XWYbNXo

This morning, reading Jess' 046 write-up from yesterday made me realize that I had skipped over some of the easter eggs in the example code. I saw the links to the box-sizing article and the CodePens, but I moved on from them without actually digging into them. I'm doing the digging in this morning and, like Jess, am happy to be putting this stuff in my brain. 

Question for Derek - is it best to keep this setup.css file as a separate file and import it into our stylesheet along with the meyer-reset.css file? Or is there a reason to keep the content of setup.css fully written out in the main stylesheet?

### Today's lesson - 047: Building a kitchen sink, part A

The web is made up of rectangles
They can shift and wrap to the next line
The window that the site is viewed in can change size, and so must the design

Everything is a rectangle!

Everything is a box! 

### To dos 

- [x] write down every HTML element you've learned about so far
- [x] write down every CSS property you've learned about so far
- [] add inner-column concept to old work
- [] add reset code to old work


## October 27, 2022

### Standup

Yesterday I think I got my head around the concept of inner-column specifically, and of using boxes inside other boxes to position things more generally. This makes sense to me - I think Derek's use of the body centered in html parallel is really helpful for my understanding. Putting borders around everything as you're writing code is also a great trick. I don't always do it, but when I do I have a much better concept of why things are behaving the way they are on the screen. I will make this part of my normal practice for a little while! 

Today I might be a little crunched for time again, so I might not do much extra beyond the lesson. I did wake up thinking that I would like to take another look at Minnie's CSS to see how it's ordered - the order made a lot of sense to me yesterday, and I would like to put it side-by-side my own CSS to see where I can improve things.

No blockers!

### Today's lesson - 046: External stylesheets

technical debt (tech debt) = computer science term - the implied cost of additional rework caused by choosing an easy (limited) solution now instead of using a better approach that would take longer

separation of concerns (computer science) - a design principle for separating a computer program into distinct sections. Each section addresses a separate concern, a set of inforamton that affects the code of a computer program.

There are sometimes important reasons why we'll write CSS "inline" or in the style information element - still good to know!

link rel="stylesheet" href="style.css"

in Derek's CSS - 
@import 'meyer-reset.css'
@import 'setup.css'

universal selector has a specificity of 0
a rule that uses the universal selector can be overriden by a single eleemnt, class or id selector


### To dos

- [x] investigate sample code
- [x] practice using .css file
- [x] figure out what projects you want to flesh out and use for a portfolio piece. Connect this project to a .css file and share progress.
- [] compare Minnie's CSS to your CSS - order and groupings


## October 26, 2022

### Standup

Yesterday I stayed up later than I meant to. It was pouring rain for my evening bike commute, so I was drenched and had to hop right in the shower when I got home. By the time I was showered and had dinner made, it was about 6:30, definitely a later start than I hoped for. Then I got really into my portal but still had to finish my typography research and my thing a day, plus I had started a blog post earlier in the day and wanted to finish that. I'm a little short on sleep this week. I'm going to make it a priority - soon! Probably not tonight because of swim class. But I am going to sleep in on Saturday, for crying out loud.

I don't think I'm going to have time for anything beyond the lesson today, but it looks like a fun one. I'm really excited to learn more layout techniques and get a bit more control over where we're placing things on the page. 

No blockers, tired but happy!

### Today's lesson - 045: Big picture layout concerns

Most websites are in a column format. 
You already know how to make a column - set max width and trick it to center with auto margins

All block level elements are just boxes - HTML, body, div, section, nav, main, footer
If you can align the body inside HTML, then you can align any element in another element

Section helps you group your content into sections
Div is for purely visual layout purposes

Div with class="inner-column" is a convention we'll use in this course, but you can use the concept in any way you can think of. Up to you to organize things in a way that is useful for your goal.

If you don't set width on body - but you have a div inside the header - 
Div max width and auto margins
header has background color and padding
The background color will stretch all the way across the screen and the content inside the div will be centered in that 
This happens because the header is a block level element with no max-width assigned, so it just keeps going

Inner-columns are kind of like mini websites

You can put any box inside of another box and center it

Put borders around everything for a little while until you get comfortable

Content is different from the grouping mechanisms that we use to put the content in different places on the page

Grouping mechanisms:
- divs
- header
- footer
- nav
- main
- article
- aside
- section 
(and a few more) 

use the semantic grouping mechanisms instead of divs if at all possible

### To dos

- [x] Uncle Bill's code
- [x] Uncle Bill's website update
- [x] find inner-columns in the wild
- [x] thing a day


## October 25, 2022

### Standup

Yesterday after working on Uncle Bill's site, I got started on my resume. It still needs a lot of work, but the basics are down. I noticed this site on the --portfolio-sites channel - it has a whole resume section, which I want to look through to get design ideas.

Today I would like to think about another blog post if I have time. It's a work day, but I have no other plans this evening, so it should be totally doable. I see that today's lesson is more on typography, which I love. I definitely want to work on building up my FontBook with favourites - that's a long-term project that I haven't put a lot of effort into yet.

No blockers today!

### Today's lesson - 044: Lists and links and more

CMD + / - with Emmet - allows you to comment and uncomment out a line of code

ul>li(asterisk)5>a will create a list with 5 list items, all with links inside

in sublime, place cursor, then hold OPT and drag vertically to place many cursors

Most lists do not have bullets

2 primary programming data structure:
- objects: for describing concepts
- lists: for putting things in some order

The whole point of visual design is to make you feel good about the page 
and to organize the situation for you to read the content, in most cases

Can create base styles that never really change - fundamental architecture of the site, with line height, spacing, etc.

and can then add more specific themes on top of that

Rules that are more specific override less specific rules
Start from a broad scope and get more specific

Typewolf

### To dos

- [x] revisit/update portal and tune up the CSS
- [x] typography research
- [x] thing-a-day
- [x] blog post


## October 24, 2022

### Standup

I felt like I had a really productive weekend. On Saturday I worked through the first version of Uncle Bill's website and also made it through the first two CSS selectors milestones. I worked on tuning up my existing projects - my 4-page-website and my project index. Next up is the portal! Yesterday I spent some time making my choose your own adventure birthday card, which I loved doing. I am really enjoying CSS and I'm looking forward to learning more.

Today I want to get through the third CSS selectors milestone and continue noodling around with my existing projects if I have time after the lesson.

No blockers today!

### Today's lesson - 043: Uncle Bill's site, part 2

Before you start typing up a bunch of code, how will you design the workflow? 

Open mockup in Skitch or ClearShot
outline the elements and sections

get structure built first - section by section - add placeholder styling

### To dos

- [x] take notes on video and share thoughts
- [x] revise Uncle Bill's site
- [x] writing exercise
- [x] thing a day
- [] blog post
- [] resume


## October 22, 2022

### Standup

Yesterday I felt good about the article exercise. I want to work on my Font Book to collect some of my favourites. I am getting a lot of satisfaction from making text look nice with CSS - line-height is a particular favourite at the moment! 

Today I have my lesson to-do list to tackle, but I have a longer and more overarching to-do list that I would like to chip away at. I definitely want to tune up some of my existing work on the peprojects server, especially in light of what we've been learning in the last week. I have so many more tools to deploy to make those sites look good. I need to put my resume together. I want to do lots of CSS practice. I'm glad it's the weekend - I find it hard to get to my broader to-do list during the work week. It's rainy and cold here in Vancouver, so I don't mind staying cozy and warm inside while I work on all of this :)

No blockers today, just feeling really happy to be getting deeper into CSS! 

### Today's lesson - 041: Transition to semantic markup & CSS classes

Before HTML5, no semantic dividing elements like header, section, footer - so people used div for everything. This is useful, but it makes code ugly.

Most people still ignore the proper elements - so there are still tons of divs

Div is a pure container with no inherent meaning - used to group content so it can be easily styled

*use the best element for the job* 
if there isn't anything meaningful to use, you can use a div - in this case, it will have a meaning because it will signify that it is only for layout

some very popular CSS frameworks are drowning in divitis and classitis

li.spacious {...} - all li elements with class = "spacious"
li.spacious.elegant {...} - all li elements with a class list that includes both "spacious" and "elegant" - for ex., class="elegant retro spacious"

.page-section h2 {...} any h2 inside class="page-section"

Try and describe the content with as much rich meaning as possible
This is more fun, gets you ranked higher for SEO, and is just the right way to do it

_keep things as organized and as simple as possible_

Never use IDs for styling

sections help describe the content structure to the computer
crawler is not using classes to understand the page, but they help us a lot
you can have more than one heading

can make gradient in background - background-image: linear-gradient(90deg, red, blue)

border-radius in pixels
top-left, top-right, bottom-right, bottom-left

### To dos

- [x] thing a day
- [x] CSS milestone 2
- [x] make a site for Uncle Bill

### Bigger to dos

- [x] choose your own adventure (card for Ann?)
- [x] tune up existing projects (screenshot old versions) - portal, 4-page
- [x] revise goals
- [] create resume 
- [] Affinity tutorials


## October 21, 2022

### Standup

Yesterday I got through some of the CSS selectors milestones. I had no idea you could create a custom HTML elements, like inner-column. They are treated like spans and displayed inline, but you can change them to display: block so they are treated like divs. I'd like to learn more about best practice for using these. 

I'm also reading about ::before and ::after, as well as :is, after taking a look at Jess and Derek's Pen from yesterday. :is seems pretty powerful as far as making your CSS easy to read and write goes. I definitely want to spend some more time understanding all of these.

Today, it's more CSS practice for me! I want to make sure to get through the second CSS selectors milestone by the end of the day. No blockers at the moment!

### Today's lesson - 040: More about resets, old positioning techniques, and box-sizing

A reset is not really a reset - it's some kind of normalized decision that someone made about what the reset should mean.

HTML kitchen-sink - allows you to toggle different resets
Pen made by Chris Coyier
Derek like the Meyer Reset

It is good to be in charge of the text
Resets might seem overwhelming, but do it - you will like it!

Maybe should be called a "set up" instead of a "reset"

div stands for "generic divider"
a way to divide text
can be further defined with class

box model 

div class= "child left"
.child
.left
- this applies both classes to the element

box-sizing: content-box - default

USE - box-sizing: border-box
tells the browser to acount for any border and padding in the values you specify for an element's width and height.
If you set an element's width to 100px, the 100px will include any border or padding you added and the content box will shrink to absorb the extra width

USE - display: flex
New type of display property - so much easier than the old way! 
flex-direction: row - this is the default - side by side
flex-direction: column - stacked
justify-content: flex-end
	- flex-start
	- space-between
align-items: center
	- flex-start

use flex to align all containers

### To dos

- [x] style a robust article - make it as readable and as legitimate as possible with just some text
- [] provide feedback to classmates
- [x] thing a day
- [x] CSS milestone


## October 20, 2022

### Standup

Yesterday I enjoyed the CSS reset exercise and learning a bit about fonts and some of the different tools we have at our disposal to make our work more readable and beautiful. I see that we'll be learning a lot about printing. Even though I want to quit my job, I think deep down at my core I'll always be a librarian who really loves books - so I think I'll be doing some geeking out today.

I've been reading The Design of Everyday Things and Don Norman talks about how humans process thoughts and emotions at three different levels - visceral, behavioral, and reflective. Visceral responses are fast and automatic - precursors to emotion - and they are all about immediate perception. So when you see a nice font on a page or some other beautiful thing out in the world (or some ugly thing), you have an immediate, uncontrollable visceral reaction. He goes on to say, "Engineers and other logical people tend to dismiss the visceral response as irrelevant. Engineers are proud of the inherent quality of their work and dismayed when inferior products sell better 'just because they look better.' But all of us make these kinds of judgments, even those very logical engineers. That's why they love some of their tools and dislike others. Visceral responses matter." 

All that is to say, this is one of the things I most appreciate about this course - we're learning how to add beauty to the useful things we make, which will in turn make our useful things more likely to be appreciated out in the world. 

Today is movie day! Is it the last week of class? Is tomorrow summer vacation? I started the CSS milestones last night - I'd like to finish going through those today. No blockers at the moment.

### Today's lesson - 039: Printing

Some great videos. Linotype = "line of type." Other terms from printing: stereotype, type casting

Linotype machine made it possible for books to be produced cheaply, for newspapers to get bigger

Invention of Gutenberg's press in 1440s turned books into commodities instead of works of art

Technology didn't change much until the 19th century. Typesetter had to place each letter by hand. Daily newspapers limited to 8 pages. 

1886 - Mergenthaler invented linotype machine
printing industry exploded in size

### To dos

- [x] watch videos
- [] CSS milestones
- [x] thing a day


## October 19, 2022

### Standup

Yesterday I wrote my 1-page website from scratch in Submlime to reinforce my knowledge of HTML structure. I'd like to play around with smooth scrolling a little more today, because I didn't fully understand the MDN code for that yesterday. I don't think we need to understand the MDN code to implement smooth scrolling - but I'd like to try to wrap my head around it anyway!

Today I'd like to spend some more time in Affinity Designer to practice with the pen tool and some of the other functions. I do like the thing-a-day for giving me a reason to open Affinity - I might not do it every day otherwise.

No blockers today! 

### Today's lesson - 038: Styling text and resets

#### Units of measurement
- ems
- rems - root em - font size of the root element of the document. Unlike the em, which may be different for each element, the rem is constant throughout the document.
- ch - character - the advance measure (width) of the glyph 0 of the element's font
- px - pixels - 1/96th of an inch

#### Styling 

- font-family
- font-size (px)
- font-weight - can be ultra-light, light, medium, normal, bold, etc. - more officially, a number. 400 is normal, 700 is pretty standard bold. Goes up to 900.
- line-height - might be referred to as leading - the space between each line of text (vertically) - no units - relative to the size of the font
- letter-spacing - may be referred to as tracking - spaces things out in a uniform position - use ems
- max-width - avg. human would prefer to see 12-14 words in a run of text. Use ch unit. 


Web browsers have default styles that get applied to an HTMl page - User Agent Stylesheet (the browser is the user agent)

CSS reset - set of CSS rules that seek to remove or unset the browser styling

Adjacent sibling combinator - write a rule that only applies when two elements are next to each other 
h2 + p {...} - any p that immediately follows an h2

read CSS selectors right to left

### To dos

- [x] play with text settings in Affinity
- [x] reset and then style an article (maybe your favorite things)
- [] resume page
- [] choose your own adventure
- [] check milestones
- [x] thing a day


## October 18, 2022

### Standup

Yesterday I tried to wrap my head around the pen tool in Affinity. Derek gave me some good tips and watched me painstakingly outline a cloud shape, which was really nice of him! I'm so impressed by what everyone else is doing with the pen tool - it really inspires me to keep practicing. 

I also played around with CodePen and image alignment. I'm still a little confused as to why my inline and inline-block images are behaving in the same way. I can see a clear difference when I use inline vs. inline-block for a span, but I'm not seeing the same thing happen with an img.

Today, aside from the lesson, I want to do some more experiments in CodePen with the different display options, float, and so on. The instant feedback of CodePen is really nice. No blockers today, just a lot to learn!

### Today's lesson - 037: iFrames and hash links

iframe is a way to put some other website in your website in a little frame. You embed the frame in your site.
Styling is out of your hands
Inside the iframe is an entire other HTML document

SEO - Search Engine Optimization. Annoying buzzword - but it is what people think of as optimizing your website so that search engines will pay more attention to it.

iframes are not crawlable - not going to be indexed, not optimized for search engines. Don't build a website around iframes. But they are useful for some things (video, social media badges, newsletter signups). 

people navigating with assistive technology such as a screen reader can use the title attribute on an iframe to label its content. The title should concisely describe the embedded content.

iframe is inline. Set it to display: block if you want to give it shape. If you do that, set width to 100%

don't forget about min-height, max-height, min-width, max-width

header, main, section, footer - all block level elements that span the width of the page and can contain other elements. They have semantic meaning - can provide crawler or assistive technology with important information about where they are on the page, what the content might be.

Asterisk is wildcard/global selector

ID is unique identifier - #


### To-dos

- [x] get substack sign up on a page
- [x] 1-page website with 4 links
- [x] blog post
- [x] smooth scrolling
- [x] thing a day


## October 17, 2022

### Standup

Yesterday I took a break from school. I actually got on another plane and flew to Monterey, California for a conference - I'll be here until Thursday. It's the Internet Librarian Conference - I'm going to be really interested to find out what I make of the sessions when I'm looking at them through my new web designer lens. 

I enjoyed Saturday's challenge - even though my site needs a bunch of work, it still felt really good to be able to build something cohesive and relatively complete in such a short period of time. I loved seeing everyone else's sites - I think we all did a really good job. 

I see that there is a pen theme in today's lesson, and I love pens so I'm here for it. I've taken a quick look at the Bezier Game - I'm on the car and it's really hard! But I like the challenge. I definitely need to watch some more tutorials to understand what's going on with the pen tool.

No blockers today.

### Today's lesson - 036: Pen tool & Code Pen

img src="" - can set width="" and height=""

inline elements share a lot of the same rules as block elements, but certain things can't be done - you can't tell an inline element what size to be.

display: inline-block

float: left or right
kind of like saying, allow the image to be on the left and let everything else float around it

### To-Dos

- [x] make something with the pen tool
- [x] make a Pen showing an image in some text
- [x] make a Pen that uses the 'float' property
- [x] create your first day of 30 graphics

## October 15, 2022

### Standup

Yesterday I updated the sites I had already styled with inline styles (portal & 4-page website) - removed the inline styles and included a CSS style sheet in the head. I think I've got my head wrapped around file structure, FTP, and html. I have a couple of git questions that I'll ask Derek today - mostly around the idea of meaningful commits and timing in the context of this course. I'll report back! 

Yesterday I also started sketching out today's challenge. Is this meant to be the true start of our personal portfolio page? That's how I'm approaching it at the moment.

Today I'm looking forward to really digging into the challenge. I think the key for me will be to not get too wrapped up in spending a lot of time styling at the outset - get the fundamentals in there, add some basic styling, and then do more if time allows. I'm sure this is a project that I'll continue to update in the coming weeks.

### Today's lesson - 034: CSS challenge

No lesson per se - just the challenge! Combine everything you've learned so far into one project.

### To-dos

- [x] challenge-1
- [x] ask Derek some git questions


## October 14, 2022

### Standup

Yesterday I had fun playing with gradients and I spent some time attempting a Big Sur recreation. My first try was really rough, my second was a bit better. It needs some major work! And I had to go to bed before I figured out how to blur the edges of my layers, but I did get some practice with the selection brush tool. I added my 2 attempts to the 032 channel. I'd be very curious to know what tools and techniques other people use to approach this. I will keep working on it!

I've decided to try to make a point of going to the library once a week to flip through some magazines and make that part of my visual inspiration collection habits. 

Today I need to get to the Goals milestone. It's been on my mind but it keeps getting pushed aside in favor of the lessons and exercises and now noodling around with Affinity. 

No blockers today!


### Today's lesson - 033: CSS intro

CSS is a declarative programming language. Allows us to write the CSS rules and "strongly suggest" how our content is presented visually.

Fundamentally - key:value pairs

CSS is how you separate your content from its presentation. 
selector - property:value = style declaration

font-size - should be at least 16px

line-height - relative to font size - no units - 1.2, 1.3, 1.4, etc.

letter-spacing - ems - also relative to font size - 0.03 em, for ex. - sets distance between characters, not just letters

max-width: 960px for body is pretty typical

horizontally center an element by setting margin-right and margin-left to auto

can set max-width on individual elements - can set a limit on how many characters are in a line - 82ch for P, for ex. 

ch unit relative to font size and to the size of a zero

Remember that display: block elements are naturally 100% of the width of their parent element. Setting a max-width gives you some control

### To-dos

- [x] goals
- [x] strip out inline style attributes in HTML & replace with CSS in head
- [x] double check file structure, HTML, FTP, and metadata understanding
- [] get together with the group


## October 13, 2022

### Standup

Yesterday we got our hands on Affinity Designer. I didn't have any time to test it out until after work, and I have a swim bootcamp at 8pm on Wednesdays (this is the one scheduled extracurricular activity that I haven't quit in favor of PE), so I was militant about my use of the timeboxing guidelines for the exercises. This sort of program is almost totally new to me - apart from the much smaller toolboxes in programs like CleanShot and Paint, the only thing that comes close is Photo Shop - and I haven't used that since 2001. I'm looking forward to getting more comfortable with the Affinity tools and different modes, and just understanding what all of the terminology means.

I was worried that I would open the program up and not be able to think of anything to create, but I just took a stream of consciousness approach, tested out different tools and played with the colors, and ended up making a few things that I wouldn't have thought to plan out on paper beforehand. I liked how one thing kind of led to another and how it's so easy to manipulate each layer - so if you're not happy with one element you can just change it or toss it and start again without pitching the entire thing.

Today I have no plans after work, so I feel better about how the lesson and exercises are going to fit in today. I'm looking forward to spending more time in Affinity! 

### Today's lesson - 032: Gradients

In Affinity, use fill tool to click and drag to make a gradient. Click G as a shortcut. Hold shift while dragging it to lock at a 90 degree angle. Click on the circles at the end of the fill tool line to change the fill color.

PNG vs. JPEG - when there are lots of tiny dots of color, JPEG will be smaller.

Design is just a thought process.
Be a designer, not just a coder.
 
### To-dos

- [] goals
- [x] visual inspiration
- [x] make some gradients
- [x] revisit your project ideas
- [x] bonus - try to recreate the Big Sur desktop background


## October 12, 2022

### Standup

Yesterday was a lot of time spent digging into source code, learning about rich metadata, and working on my file structure. I added a "projects" folder to my root "pe-projects folder," which meant I had to update all of my website links, but I think I have that sorted out now. 

With peprojects.dev and the file structure - I'm wondering if we are supposed to transfer everything in "pe-projects" (or whatever we end up calling the root folder) to the server - or just the "projects" folder and the index? Does the journal need to be in there, or the "goals" folder? Also curious about the "images" folder. Will we have separate "images" folders in each project folder, as well? 

Looks like we're getting into Affinity Designer today! I have essentially zero experience with programs like this, so I am nervous and excited. No blockers!

### Today's lesson - 031: Affinity

Digital assets

HTML meta - charset, viewport, name=description content="..."

Open Graph meta data - meta tags for social media sharing graphics

Meta descriptions - Google generally truncates these to 155-160 characters. There is no technical limit.

Test updated site with Facebook Debugger, Twitter Card Validator, Linked Ins Post Inspector, www.opengraph.xyz 

Standard-ish meta image size = 1200 x 630 px
72 DPI
It's for the web, so it's RGB
can't use SVG for Open Graph

### To-dos

- [] VISUAL INSPIRATION!
- [x] Affinity - create 1 of each type of image: JPG, PNG, SVG (40 mins) 
- [x] Affinity - create a metadata share image (20 mins) 
- [x] add new site meta & image [30 mins, don't overthink] 


## October 11, 2022

### Standup

Yesterday was a good day of getting things organized and feeling comfortable in where I'm at in the class. I got a start with Tower for Git, which is a much more user-friendly interface than the command line. I want to keep practicing with the command line to commit files just so I don't forget how to do it, but Tower makes things really simple. They have a good resource on their website for total git newbies, which we obviously are not but it's still helpful to take a look at it! Lots of other useful learning materials on there too.

I definitely need to work on prioritizing my visual inspiration folder. Having this task as a constant in the back of my brain is a new habit that I need to develop. I'm going to try to make a point today of taking some screenshots and building that muscle memory.

No blockers today, go Mariners!

### Today's lesson - 030: viewing source, site metadata, intro to Dev Tools

A web crawler is a software application/bot that runs automated tasks to download webpages for the purpose of recording their content and how they are connected. A search engine can then search that evolving set of data. 

CMD + OPT + i to open Chrome Dev tools.

It is very hard and expensive to fix a huge mess once it's made - much easier to just do things well in the first place

Thoughtful metadata in your html means services like social media and text messaging applications can display a richer set of information for the viewer.

### First group meeting 

We had our first group meeting at noon - me, Jake, Drew, Alina, Jess and eventually Derek. I don't think we talked about much that was course-related, but it was really nice to chat with everyone! 

### Stuff I need to continue to work on

html practice - get your websites doing what you want them to do. 
- [] I need to figure out spacing and responsiveness. 
- [] Why are the dots above your 4-pager nav bar going off the page? Do they do this in every browser?
- [] responsive nav bar
- [] add some divs? or sections? Don't want the text to stretch all the way across the page if the screen is big. 
- [] file structure?

### To-dos 

- [] visual inspiration
- [x] rich metadata exploration
- [x] Lighthouse experiments
- [x] looking at other people's code
- [x] working on file structure


## October 10, 2022

### Standup

Today is Canadian Thanksgiving here and also Indigenous Peoples' Day in the US. I've been streaming KEXP radio and their morning show is playing a pretty great Indigenous Peoples' Day program right now. You can check it out at kexp.org.

I thought I would do some work yesterday, but I pretty much took the day off and that was good. On Saturday, I got Cyberduck set up and moved my project files over to the PE Projects server. I think it all went pretty smoothly for me. 

Today I'm glad we have what seems to be kind of a catch up day. Apart from the exercises, I want to take a look at Divvy and get that going. My windows tend to not be well-arranged and it will be nice to have a way to manage that. I also want to collect some helpful design-related links in my portal, like the Sorted CSS Colors and Safe Web Fonts pages - I'd like to to have resources like that all in one place. 

No blockers!

### Today's lesson - 029: Being accountable for breaking more things more often

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

### Today's lesson - 027: FTP, style like it's 1992

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

### Today's lesson - 026: More HTML/display types & hierarchy

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

### Today's lesson - 025: Research & Web Portals

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

### Today's lesson - 024: Networking

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