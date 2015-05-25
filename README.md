# Peace

Peace is a Mood diary &amp; gym for your thoughts. It was made as a project for the [Hamburg Geekettes HackathonHH 2015](http://hamburg-hackathon.de/hackathon). It runs as a web app, so you can pretty much open it in almost any device with an internet connection (display quality may vary). **Right now is mostly a mockup, but if you join this piece by forking it, we could make it a fully functional app.**

- [Context](#context)
- [Our work](#work)
- [Take the app for a ride](#ride)
- [Future](#future)
- [Risks](#risks)
- [Installation](#install)

<h2 id="context">Context</h2>

[**Currently 350 Mio. people worldwide have depression.**](http://www.who.int/mediacentre/factsheets/fs369/en/)
 
For treatment, most patients work with psychologist need medicine and close attention, but in many cases the attention part is easier said than done. The type and dose of medicine needs to be adjusted to everyone individually. Its fit is measured through an approximated expectation of changes in mood, sleeping and eating habits, etc. Patients in many cases also need to be monitored by psychologists to know about the current state of their condition depression. 

We consider that [Mental health is still taboo or not seriously covered of by app makers](https://github.com/svenport/peace/blob/master/screengrabs/mental%20health%20app%20mess.jpg). So we decided to assess that during our hackathon project. We wanted to make something pretty, empathetic, useful, and simple that can help anyone with a phone and an internet connection.

<h2 id="work">Our work</h2>
 
![Cover Image of Peace](https://github.com/svenport/peace/blob/master/screengrabs/cover.jpg)

We designed a mood tracking application prototype. We named it **Peace**. It lets you input and track your mood over time, provides tools to cheer you up, reach a safe space, or report an emergency. 

We believe we can help millions of users, specially when using it parallelly to professional counseling.

<h2 id="ride">Take the app for a ride</h2>

If you want to participate and test the app prototype, you can do it by:

1. Open [this link](http://svenport.de/peace/peace.php) in your mobile browser
2. Add it to your home screen as an app 
![Add as app](https://github.com/svenport/peace/blob/master/screengrabs/grab.jpg)
3. Tap it and and play with it.
![Playtime](https://github.com/svenport/peace/blob/master/screengrabs/app.jpg)

<h2 id="future">Future</h2>
We would like to make this a useful, running app that you can work natively with. For this we are considering applying for some funding and professional help from psychologysts to make it a fully functional piece of work.

<h2 id="risks">Risks</h2>
This has been worked by a group of passionate people that, while aiming for empathy, are not psychology professionals. Hence this app, as it is today (May 25th, 2015) might have underlying risks. We want to have an empowering tool based on empathy and real need. Please fork, comment, or pass this repository to your friends. The more people involved, the better. 

<h2 id="install">Installation and Setup</h2>

1. Setup Server, e.g. Apache
2. Install PHP
3. Clone the repo: git clone https://github.com/svenport/peace.git
4. Point server to the cloned repo
5. Open url: http://localhost:8080/peace/peace.php

## Setup app

To run the application properly you need two registered applications: One for soundcloud and one for Twitter

### Soundcloud

Login to Soundcloud and create an application: https://soundcloud.com/login?return_to=%2Fyou%2Fapps

Then paste the client id into Peace/javascript/peace.js @line 156

### Twitter

Login to Twitter and create an application: https://twitter.com/settings/applications

Then paste the ids into /Peace/lib/TwitterPost.php @line 12 to 15
