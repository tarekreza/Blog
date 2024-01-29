<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title'=>'How to Build a Personal Brand as a Developer',
            'slug'=>'how-to-build-a-personal-brand-as-a-developer-1',
            'user_id'=>'1',
            'category_id'=>'8',
            'imagePath'=>'postsImages/Ywq0s37VyqJ7a0dpHbANEMNTIAPvuscW5CfvvR0o.jpg',

            'body'=>'<p>There are a lot of stereotypes out there about developers&mdash;many of them untrue! But what <em>is</em> true is that generally as a developer, you start with a set of hard skills which you leverage into your career and professional development. You perform your work with a scientific skillset that is the perfect tool for specific tasks. While that skillset is <a href="https://cult.honeypot.io/software-developer-salaries-2023/software-developer-salaries-germany" target="_blank">extremely valuable and hireable</a>, it might mean that it&rsquo;s harder for you to launch the <em>softer</em> (yet equally crucial) skills that lead to a satisfying and fulfilling career&hellip; like building a personal brand.</p>

                <p>But building a personal brand is a fulfilling and practical tactic in today&rsquo;s industry. Far from a vanity move or unnecessary work, a personal brand:</p>
                
                <ul>
                    <li>
                    <p><strong>Helps you stand out from the crowd:</strong> In a field where people have similar skillsets, you can differentiate yourself, and add an edge to your CV and portfolio.&nbsp;</p>
                    </li>
                    <li>
                    <p><strong>Gives you credibility:</strong> As people in your industry become more familiar with your brand,&nbsp;it increases your chances to get the roles and promotions you want.</p>
                    </li>
                    <li>
                    <p><strong>Provides the opportunity to network:</strong> Even in the process of building your brand, you&rsquo;ll network more and connect with other developers, potential employers, and industry experts.</p>
                    </li>
                    <li>
                    <p><strong>Puts your name on the map:</strong> If starting your own company, getting in at the ground level or rising to C-level is on your list of career goals, personal branding is a must!</p>
                    </li>
                </ul>
                
                <p>A personal brand can help you in a myriad of crucial, career-defining ways. But how do you actually go about doing it? If you&rsquo;re more comfortable showcasing your hard skills or if you&rsquo;ve just never approached the idea of marketing (especially self-marketing), it might feel overwhelming or even impossible. The good news is, there are a lot of easy ways to take small steps into personal branding and build it naturally into your life. In this guide, we&rsquo;ll break down some practical strategies!</p>
                
                <h2><strong>Consider Your Own Ambitions and Comfort Level</strong></h2>
                
                <p>Before launching into a massive project, take a step back to plan it in a way that makes sense for your particular career path and comfort level. This means asking yourself questions like: what would my dream position be in ten years? What do I want other people in my industry to associate with me?&nbsp;</p>
                
                <p>Create a project plan for your own personal brand. If you&rsquo;re more comfortable behind a screen, you might want to avoid in-person events and speaking opportunities, at least to start. If you know that you have trouble following through, you might want to plan out posts and activities several months in advance, so that you won&rsquo;t stall a few weeks in.&nbsp;</p>
                
                <p>You should also try to tailor your plan to your own specific goals. If you&rsquo;re after a career in management, you could concentrate more on making yourself a thought leader in that particular space. If you&rsquo;re more interested in becoming the leading expert in your coding language, start connecting with other experts in that same space so that you become a known and respected peer.&nbsp;</p>
                
                <p>If you&rsquo;re not exactly sure what you want, take time to focus on that <em>now</em>, before you start building a confused or muddled personal brand. A pivot later on, of course, is okay, but you&rsquo;ll set yourself up better for success if you have a clear idea of what you want and how to go after it. To help, you might ask if you could have an informational interview with someone whose career path you admire. Or you could speak to your manager or even a career counselor to help you focus on your own professional goals.</p>
                
                <h2><strong>Embrace Your Own Passions and Knowledge</strong></h2>
                
                <p>The secret key to making your personal brand inspiring, engaging, and completely unique? You.&nbsp;</p>
                
                <p>Though research on other industry leaders is key, try not to lose sight of yourself&mdash;that&rsquo;s what a personal brand is all about after all! Consider all of your favourite (and least favourite) things about your job. What do you love most? What do you find most frustrating? What are you best at? What can you see as an innovative new way of doing? What attracted you to your job in the first place? What are you most excited about for the future?&nbsp;</p>
                
                <p>Think about all the opinions you have about your role; think about what you discuss with your industry friends or colleagues over lunch. Filter out the inappropriate topics (this is not the space to <a href="https://cult.honeypot.io/reads/how-to-tell-your-boss-you-are-unhappy/" target="_blank">complain about your boss</a>) and you&rsquo;ve got a list of potential topics that you can make part of your brand! To formalize this process, you could try making a mind map or running list of topics that you find fascinating and want to share your expertise on.</p>
                
                <p>It&rsquo;s important to remember that creating a personal brand doesn&rsquo;t mean being <em>fake</em>. In fact, authenticity will attract more people to your brand. You&rsquo;re always going to be at your most engaging when you&rsquo;re talking about something you actually care about. So embrace what makes you excited (or frustrated, or frightened, or hopeful) about your industry, and start talking about it!</p>
                
                <h2><strong>Create an Online Presence</strong></h2>
                
                <p>Good news, introverts! In today&rsquo;s world, building a personal brand doesn&rsquo;t mean you have to be out there shaking hands and taking the stage. You&rsquo;ll be surprised at just how much you can achieve by building a strong online presence. In many ways, an online presence is <em>more </em>important than regularly attending industry events. After all, industry events happen irregularly, but you can put your content in front of people&rsquo;s faces every day online.</p>
                
                <p>There are lots of online spaces where you can make an impact. Here are a few to consider:</p>
                
                <ul>
                    <li>
                    <p><strong>LinkedIn:</strong> Chances are, you already have a LinkedIn, so here&rsquo;s your opportunity to buff it up. Ensure your page is up-to-date, catchy and presents you at your best (that means adding an interesting bio and highlights so people can easily understand your profile). And then update your LinkedIn regularly by posting and commenting on other people&rsquo;s posts, to build an online community.</p>
                    </li>
                    <li>
                    <p><strong>GitHub:</strong> If you&rsquo;re a programmer, ensure that you maintain an active GitHub profile. Showcasing your open-source contributions and personal projects is a great way to make yourself known and show off your coding skills amongst your colleagues and peers in the industry&hellip; as well as attracting the interest of someone higher up!</p>
                    </li>
                    <li>
                    <p><strong>Other social media platforms:</strong> Depending upon your expertise, interest and favourite platforms, you could also consider branching out on X (formerly known as Twitter), TikTok, YouTube, Medium and more. Again, follow your passion &mdash; if you already have a stake and a following in a social media platform, here&rsquo;s the chance to invest in it.</p>
                    </li>
                    <li>
                    <p><strong>Build your own website:</strong> You may have spent some time building other people&rsquo;s websites &mdash; here&rsquo;s your chance to build your own! A personal website is a great space to host a portfolio and blog. Design, developing choices and the copy on your website is also another way you can highlight your own skills, interests and brand. Ensure that your contact information is visible so potential employers and clients can reach out easily!</p>
                    </li>
                    <li>
                    <p><strong>Build Offline Buzz</strong></p>
                
                    <p>Good news, extroverts! Being a developer can be lonely work, but building a personal brand as a developer can be extremely social and fulfilling.&nbsp;</p>
                
                    <p>Whether you&rsquo;re happiest in a spotlight or feel nervous about venturing beyond your comfort zone, it&rsquo;s a good idea to venture into offline spaces and start making yourself known at industry events, conferences, workshops, hackathons and more. If you&rsquo;re shy, you could start by simply attending &mdash; go to events on topics that particularly interest you, so you&rsquo;re more likely to forget your nerves, or ask some friends or colleagues to come with you for support.&nbsp;</p>
                
                    <p>But as you build your confidence, or if you&rsquo;re already happy speaking to audiences, it&rsquo;s a great idea to aim for moments in the spotlight. Speaking at conferences, leading workshops or appearing on podcasts are great ways to make yourself more recognisable, reach new audiences and build authority in your industry. Later down the line, you might even consider starting your own podcast or other offline activities that offer you the chance to connect on your terms!</p>
                
                    <p>Working on your online presence by posting regularly on social media and sharing your portfolio is a great way to attract the attention of organizers for such events. But don&rsquo;t wait to be asked! Start pitching yourself, reaching out to conferences, podcasts and other companies ahead of time. Share your credentials and give an idea of what you&rsquo;d like to talk about, and you&rsquo;ll be surprised at how many people leap at the chance to hear what you have to say.</p>
                
                    <p>Of course, you should also use these events as a chance to network. Introduce yourself to new people, thank speakers for their insights, and take the chance to connect wherever you can. Then add them on LinkedIn when you&rsquo;re home so you don&rsquo;t lose the connection!</p>
                    </li>
                    <li>
                    <h2><strong>Measure and Adapt</strong></h2>
                
                    <p>As a developer, you&rsquo;re likely a data-driven person. Now&rsquo;s the chance to use those skills to help you build a personal brand. As you work on these new branding activities, ensure you keep a close eye on what&rsquo;s working and what&rsquo;s not. Use tools like Google Analytics to check the performance of your website and content, or check out social media platforms&rsquo; internal metrics to get a sense of your performance. You could also try collecting data about your offline networking efforts &mdash; for example, which people are now consistent parts of your life? What encounter led to something fruitful? A fun side project could be building your own metrics to analyse the success of your networking!</p>
                
                    <p>You&rsquo;ll start to see interesting results. Perhaps that off-the-cuff meme you posted performed better than the blog posts you thought about for weeks. Perhaps people are connecting more with your personal stories than your professional thoughts, or vice versa. Perhaps that person that you met at the bar after a conference is commenting on a lot of your posts and boosting your engagement. Based on the data you collect, you can adapt your strategy to hone in on what will make your personal brand successful.&nbsp;</p>
                
                    <p>Building a personal brand is, ultimately, all about investing in yourself. Your ambitions, your skills, your personality &mdash; they all make you a unique asset. A personal brand is your testament to that! So be proud and build the future you want.</p>
                    </li>
                </ul>',
        ]);
        Post::create([
            'title'=>'6 Ways To Maintain Good Mental Health as a Software Engineer',
            'slug'=>'6-ways-to-maintain-good-mental-health-as-a-software-engineer-2',
            'user_id'=>'1',
            'category_id'=>'2',
            'imagePath'=>'postsImages/9p2eVnKFHfhh2RJVdVLEjg3094UJfez0xKaC8a31.jpg',

            'body'=>'<p>Software Engineers are puzzle solvers, but the puzzle isn&rsquo;t pieces that fit together in the real world. Instead, it&rsquo;s breaking down user stories, feature requests, and bug fixes into smaller chunks and solving them without breaking previously solved pieces. Imagine a puzzle that was ever-changing, the pieces changed sizes and shapes, new pieces were introduced with colours that don&rsquo;t match expectations or assumptions when first putting it together. Your job is to continuously put the puzzle together.</p>

            <p>In essence, Software Engineers do this every single day.</p>
            
            <p>But, that&rsquo;s just the tip of the iceberg when it comes to being a Software Engineer. We don&rsquo;t work in silos and we certainly don&rsquo;t make all decisions on our own, that&rsquo;s where our team comes in!&nbsp;</p>
            
            <p>Similar to any group of people trying to solve a challenge, there are sometimes disagreements on the best path forward. That&rsquo;s why <a href="https://cult.honeypot.io/reads/soft-skills-in-career" target="_blank">soft skills</a> are an imperative part of being a great asset to a dev team. It can also be a huge stressor as we aren&rsquo;t trained or taught how to be a great teammate or communicator in our Computer Science or Bootcamp classes. Developing features effectively takes hard work and strong leadership from members of the team.</p>
            
            <p>These two pieces, completing the changing puzzle pieces and working with a team are both gratifying; also, they can be very stressful.&nbsp;</p>
            
            <p>Deadlines increase the pressure of our work. Bugs or writing tests might cause dates to be pushed because our misjudgment caused an underestimated workload.&nbsp;</p>
            
            <p>It happens - that&rsquo;s why they are considered estimates - but too often they are treated as final, no ifs, ands, or buts about it; engineers must do what it takes to meet them for strong annual reviews that influence their compensation. 2020 added its own flavour to the stress recipe, dealing with a pandemic and working remotely became the new normal.&nbsp;</p>
            
            <p>Teams that functioned in-person adapted to remote work quickly, striving to find productivity and collaboration without a whiteboard or real meeting rooms. For many of us, our socializing needs haven&rsquo;t been met, and while we feel stuck in our apartments, healthcare workers take on the brunt of it with their diligent work ethic as they help save the world.</p>
            
            <p>It&rsquo;s not always fair to compare one&rsquo;s problems to another since we all know you can&rsquo;t compare apples to oranges. Regardless of the severity of one&rsquo;s problems to another, how privileged one is compared to another, at a basic level, we all must take our mental health seriously!</p>
            
            <p>I hope to help you do just that with a few simple ideas that can help you maintain good mental health as a Software Engineer!</p>
            
            <h2>1. Handling Imposter syndrome</h2>
            
            <p>Imposter syndrome boils down to believing you are not qualified for the position or work you have credentials for. It&rsquo;s a common challenge in tech due to its fast-paced always changing nature.</p>
            
            <h2>2. Take breaks</h2>
            
            <p>Have you taken a short walk with or without headphones in the past few months? If so, think about how you&rsquo;ve felt afterwards. Did you feel any different?</p>
            
            <p>When learning we would be working remotely for the foreseeable future, our organization organized a How to Transition to Working From Home Lunch &amp; Learn to help ease our transition. Taking breaks, <strong>real breaks</strong>, not making coffee, or grabbing a snack while looking at your computer screen truly makes a difference in productivity.&nbsp;</p>
            
            <p>Breaks are key when weight training or when I was attending practices for high school athletics. Our body needs time to recover between sets within a workout regiment, without them, our muscles are depleted of energy, and our reps in later sets suffer.</p>
            
            <p>Similar to our physical body, our brain too needs breaks.</p>
            
            <p>Software Engineering requires intense concentration, knowledge, and patience. Our frustrations while solving a tough bug or angst when user error feels like computer error should not be taken lightly. We need time to recover throughout the day!</p>
            
            <p>There are many different options here, so I&rsquo;ll talk about two.</p>
            
            <p><strong>Option 1:</strong> schedule two 20 minute blocks on your calendar; one in the morning and one in the afternoon. This is your get up, walk around, listen to an audiobook, read a paperback book, meditate, or free up your evening by taking up house chores time. You can literally do ANYTHING you want during this time except for work and looking at a screen.&nbsp;</p>
            
            <p>The productivity gains from this can be felt immediately when getting back into the zone.</p>
            
            <p><em>PS: sometimes we have to reschedule or miss a break, it happens. Forgive yourself and work on doing so the next day.</em></p>
            
            <p><strong>Option 2: </strong>the Pomodoro technique (<a href="https://tomato-timer.com/" target="_blank">nifty timer for this</a>). This technique breaks productivity sessions into three different time blocks: 25-minute work sessions, 5 minute short breaks, and 15 minute long breaks. Take four 25-minute work sessions with short breaks in between. Follow the fourth session with a long break. Repeat!</p>
            
            <h2>3. Friends and Family</h2>
            
            <p>The pandemic has introduced a significant challenge for seeing loved ones on our usual cadence. Instead of holiday get-togethers or watching nieces and nephews play sports with members of the family, we only have virtual opportunities that our brain knows aren&rsquo;t the same.</p>
            
            <p>Still, the rejuvenation and refreshed feeling after catching up with your close friends or family (or both) can&rsquo;t be discredited. There&rsquo;s something we feel all the way in our bones when we&rsquo;re with the people we love and who love us most.&nbsp;</p>
            
            <p>I&rsquo;m not recommending calling someone or catching up with every person every day. I&rsquo;m encouraging you to schedule a time for these important people in your life every once in a while.</p>
            
            <p>The feeling of closeness in tough times goes a long way - let&rsquo;s not take on these challenges alone!</p>
            
            <h2>4. Practice Mindfulness Meditation</h2>
            
            <p>We live in a VERY busy world full of so many different types of noise at one time. Coding while slacking, reading while responding to text messages, walking while listening to music. We rarely focus exclusively on one thing! When do we sit down and give ourselves the time required to listen and observe our thoughts, accepting and understanding them with patience instead of avoiding them?&nbsp;</p>
            
            <p>Many of us don&rsquo;t. We quickly can see why practising mindfulness has become so popular.</p>
            
            <p>From <em>Benefits of Mindfulness at HelpGuide: </em>&ldquo;Mindfulness is the practice of purposely focusing your attention on the present moment&mdash;and accepting it without judgment. &ldquo;</p>
            
            <p>Taking time to practice mindfulness slows us down, granting us the ability to reap all of its benefits! What benefits you ask? Check out these to read all about it:</p>
            
            <ol>
                <li>
                <p><a href="https://www.nytimes.com/guides/well/how-to-meditate#:~:text=Mindfulness%20meditation%20is%20the%20practice%20of%20actually%20being%20present%20in,present%20moment%20without%20any%20judgment." target="_blank">New York Times - How to Meditate</a></p>
                </li>
                <li>
                <p><a href="https://www.mindful.org/meditation/mindfulness-getting-started/" target="_blank">Getting Started with Mindfulness Meditation</a></p>
                </li>
                <li>
                <p><a href="https://www.helpguide.org/harvard/benefits-of-mindfulness.htm" target="_blank">The Benefits of Mindfulness</a></p>
                </li>
            </ol>
            
            <h2>5. Exercise</h2>
            
            <p>An important part of mental health, believe it or not, is exercising (learn about <a href="https://www.apa.org/monitor/2011/12/exercise" target="_blank">the Exercise Effect</a>). Weird right? How can physical activity help out our mental well being?</p>
            
            <p>Exercising requires discipline, which means accomplishment by sticking to it. That accomplishment releases dopamine, making us happier. It relieves stress and keeps our heart working as it pumps blood through our bodies. Software Engineers typically sit throughout most of our day, so we must combat the effects on our bodies for doing so.</p>
            
            <p>Whether you&rsquo;re hitting the gym with an intense routine or not, at the very least taking smaller walks every evening or a few times per day rejuvenates us and improves our well-being. <a href="https://www.helpguide.org/articles/healthy-living/the-mental-health-benefits-of-exercise.htm" target="_blank"><em>Check out the Mental Health Benefits of Exercise for more information</em></a> on why some exercise is better than none.</p>
            
            <p>As a New York City dweller, the difference in the number of steps per day taken this year versus last year has been night and day. From at least one-to-two miles walked every day to less than one because the forcing function of a commute has evaporated.</p>
            
            <p>There has been no better antidote than grabbing a mask, putting on my headphones, and loading up an audiobook as I gain knowledge while exercising - true concurrency at its finest!</p>
            
            <h2>6. Hobbies / Passions</h2>
            
            <p>This has the fundamental idea of taking time away from your required obligations to do the things you love. It is your guilt-free, do whatever it is that makes me feel joy time of day!</p>
            
            <p>This can be reading <a href="https://www.kalebmckelvey.com/blog/why-i-choose-to-spend-hours-reading-fantasy-books-in-my-life" target="_blank">Fantasy</a> books (Stormlight Archive anyone?), binge-watching The Mandalorian on Disney+, or just lurking your favourite subreddits.&nbsp;</p>
            
            <p>It can be woodworking projects, making music, playing video games, or creating a wonderful home-cooked meal. The options are endless and the only requirement is that you are happier after the activity has concluded!</p>
            
            <p>Giving myself time to be happy and enjoy the little things in life has made a large impact this year. If my body and mind didn&rsquo;t feel productive and motivated to write or work on side projects, I listen to it.&nbsp;</p>
            
            <p>When your body and mind require time to recharge, it is so important to listen. It will make the words or code come easier when you get back to it! Our minds need time to cope with the huge changes in our daily life, and that is totally ok :)</p>
            
            <h2>Wrapping Up</h2>
            
            <p>Software Engineering jobs can be stressful, full of pressure to deliver tough tech challenges by the project deadlines. Further, finding solutions to ghastly issues drains our brain&rsquo;s energy day after day. Our soft skills and interpersonal skills must remain sharp because collaborating effectively brings about better results.</p>
            
            <p>In fewer words, being a Software Engineer can be exhausting, especially for our minds.&nbsp;</p>
            
            <p>It&rsquo;s easy to see based on that conclusion the importance of mental health.&nbsp;</p>
            
            <p>Taking time for self-care to recharge and enjoy life outside of our work makes us better engineers. It rejuvenates us. It makes us more productive. And it makes work more fun. All of which makes <a href="https://cult.honeypot.io/developer-happiness-index" target="_blank">developers happier</a>!</p>',
        ]);
        Post::create([
            'title'=>'What’s The Difference Between a Junior, Mid-Level, and Senior Developer?',
            'slug'=>'whats-the-difference-between-a-junior-mid-level-and-senior-developer-3',
            'user_id'=>'1',
            'category_id'=>'6',
            'imagePath'=>'postsImages/VFFkfCIoLAA4QsCAZTBJqEVdiXnKLZ9EBJf6AdpY.jpg',

            'body'=>'<p>As with all careers, there&rsquo;s a hierarchy of levels in software engineering. As we know, it&rsquo;s based on experience, technical knowledge, and leadership skills. Now if you are reading this you are probably not super clear on where these lines exist. For example, junior vs senior developer or entry-level vs junior developer. <strong>It&rsquo;s a bit of a blur, especially when companies have their own sets of criteria for judging these developer types.</strong></p>

            <p>As you progress in your career you&rsquo;re going to get to a point where you&rsquo;ll want to jump to the next stage. Each stage comes with its own expectations, skill requirements, and salary. <strong>I&rsquo;m going to try my best to break down each level; entry, junior, senior, and tech lead based on the criteria I just mentioned.</strong> Now, this isn&rsquo;t gospel, but it should hopefully guide you in the right direction and towards the correct growth path. So let&rsquo;s jump in!</p>
            
            <h2>1. How to become an entry-level/junior engineer</h2>
            
            <p><strong>I&rsquo;m going to come right out and say it, this is probably going to be the hardest stage in your career!</strong> Getting your foot in the door isn&rsquo;t an easy task for everyone (me included). We call come from different educational backgrounds and even countries, which influence our job opportunities. For example, <strong>coming out of a Bootcamp isn&rsquo;t going to be the same as a full university degree with an internship</strong>.</p>
            
            <p>It&rsquo;ll be daunting at first but don&rsquo;t worry we&rsquo;ve all been there and with some grit and persistence, you&rsquo;ll land that first job! <strong>If you&rsquo;re at this stage and struggling, lower your expectations a tad and try for an internship or startup &mdash; put your skills to practice as soon as you can and start building that portfolio. </strong></p>
            
            <p>&nbsp;</p>
            
            <h3>What to expect</h3>
            
            <p>For the most part, you&rsquo;ll be relying heavily on your team and mentor to guide you and help you grow. There might be a bit of imposter syndrome but try your best to put it aside, your company and team don&rsquo;t expect you to know everything. <strong>They&rsquo;re probably aware that much of your time will be spent learning and asking questions. </strong></p>
            
            <p>A lot of entry-level engineers&rsquo; responsibilities surround learning the technical environment they will be working in and learning the processes of an engineering team. <strong>When you&rsquo;re up to speed, you&rsquo;ll be expected to enter a codebase and make additions (minor) to it without tons of issues. </strong></p>
            
            <p>Expect to learn the intricacies of the project you are joining, while using the fundamentals you&rsquo;ve learned to get this role. <strong>You&rsquo;ll be spending your time, reading requirements, understanding the codebase you&rsquo;re working in, and creating these changes within a specific time frame. </strong></p>
            
            <p>Throughout iterations of features and bug fixes that you complete, you will learn how the software development life cycle operates and how your project operates. Software development lifecycles tend to be quite similar between companies. Most companies typically follow some sort of request &mdash;&gt; design &mdash;&gt; business fit &mdash;&gt; and implementation structure to their projects.</p>
            
            <p>You will likely be amongst other engineers, some more experienced and tenured than you. <strong>These engineers, typically the more senior ones, will be responsible for helping you learn and being a contributing member of the team. </strong>Treat this as an opportunity to learn skills from them and help you advance in your career.</p>
            
            <p><strong>Take a deep breath&hellip; remember entry-level engineers will not be expected to &ldquo;hit the ground running&rdquo;, a team will expect to mentor you and help you grow.</strong> You&rsquo;ve probably heard this a million times but seriously, don&rsquo;t be afraid to ask questions. This can&rsquo;t be stressed enough, everyone senior was once a junior, and letting yourself aimlessly struggle on problems will not help you grow. Timebox your problems and when you feel stuck, reach out for help.</p>
            
            <h3>Education and skills</h3>
            
            <p>As an entry-level engineer, you&rsquo;ll probably be fresh out of college or a boot camp graduate. In this day and age where degrees tend to not always be an accurate measure of someone&rsquo;s ability, <strong>being an entry-level engineer really boils down to your skill set and the amount of ACTUAL experience you have.</strong></p>
            
            <p>Entry-level engineers should understand the fundamentals of the technology they are working with, alongside the environment they are in. <strong>A high-level understanding is a big part here, you should know a little about a lot of different parts of the software stack you are joining</strong>, enough to have an idea about where you need to learn more, the knowns and unknowns.</p>
            
            <p>Additionally, you should have an understanding of how git works as a version control system, and bonus points if you understand branching strategies. Finally, <strong>if you have experience making pull requests/merge requests this is great</strong> because you will be making a lot of them as a member of a team.</p>
            
            <h3>Junior Engineer salary</h3>
            
            <p>You&rsquo;ve probably already searched on Glassdoor or LinkedIn, which will give you a fairly accurate range based on your location. <strong>From my experience, you&rsquo;ll be looking at anything between $65-75k, but again, starting salary will depend on education, experience, and skills.</strong> Also, keep in mind salaries are higher in the United States compared to Europe or elsewhere. This can also vary greatly by the technology you are working on, so be sure to do more specific research for your area, company, and technology.</p>
            
            <h2>2. How to become a mid-level engineer</h2>
            
            <p>Mid-level engineers sit between junior and senior developer titles. As a mid-level engineer, you&rsquo;re starting to get the hang of things. <strong>You won&rsquo;t require much hand-holding or guidance, and you&rsquo;ll have experience across multiple projects in a professional setting.</strong></p>
            
            <p>It&rsquo;s hard to put a number to it, but <strong>a mid-level developer most likely has a couple of years of experience and hours and hours of coding under their belt.</strong> You might have even changed companies and worked on a different codebase.</p>
            
            <h3>What to expect</h3>
            
            <p>Mid-level engineers are engineers who&rsquo;ve worked for a few years or may have gone into their second engineering role. <strong>A company&rsquo;s going to expect that you have a good understanding of the software development life cycle and are able to take on work without much direction a majority of the time.</strong> It&rsquo;s totally acceptable to ask context questions around your work and clarify the work, however, a mid-level engineer will tend not to struggle with the technical implementation of a feature.</p>
            
            <p>A mid-level engineer&rsquo;s scope of knowledge will be highly centred around the applications they support and the entire flow within their applications. <strong>These levels of engineers should be able to receive a feature of higher complexity and complete it in a reasonable amount of time. </strong></p>
            
            <p>A mid-level engineer should also be able to implement completely new features from scratch and work through the integration of these features with the rest of the codebase. Additionally, <strong>they will have the experience in development to know when certain features should be broken up into more consumable pieces</strong>, as well as a high-level idea of how to approach a technical problem.</p>
            
            <p><strong>A great way to jump from junior to mid-level engineer is to simply spend a good amount of time on the same project</strong>, learning how it works, and having experience in many different aspects of the codebase. Exposure to different parts of the codebase and lots of heads downtime within the code will help you accelerate your development career. Code code code.</p>
            
            <h3>Education and Skills</h3>
            
            <p>Take the same type of education as an entry-level, but add more in-depth knowledge behind the technologies you are working on. For example, if you work in React, you may now be much better at understanding the advanced concepts behind React and begin to understand how to break down a UI element into many different parts to create, bonus points if you can make them reusable for other engineers on your app.</p>
            
            <p>Additionally, <strong>you should start keeping up to date on industry trends and emerging technologies here.</strong> The tech industry is constantly evolving and improving and there are more and more solutions to yesterday&#39;s problems.</p>
            
            <h3>Mid-level Engineer salary</h3>
            
            <p>Again, I&rsquo;m repeating myself, but the salary range is going to vary from company to company, and location to location. <strong>Let&rsquo;s say a mid-level engineer has a minimum of 2-3 years of experience, you&rsquo;ll be able to aim for some around $80-90k</strong>. Remember though, salary expectations at Facebook are going to be way different from a startup. But you&rsquo;ll probably find a compromise through equity or additional benefits.</p>
            
            <h2>3. How to become a senior engineer</h2>
            
            <p>This is the next big step, becoming a senior engineer! It&rsquo;s definitely a very exciting title to step into and a huge benefit towards autonomy and market value (<strong>every company wants a skilled senior dev so get ready for an onslaught of LinkedIn DMs</strong>).</p>
            
            <p>The senior title shows expertise, a proven track record of success across multiple projects, and the leadership skills to mentor junior and mid-level developers. <strong>In this role, you&rsquo;ll need to be a jack of all trades and an expert beginner. </strong>So be prepared to be flexible and agile when it comes to your day-to-day. You&rsquo;ll be leading and mentoring, tasked with solving complex software issues and acting as the source of all knowledge (no pressure).</p>
            
            <h3>What to expect</h3>
            
            <p><a href="https://cult.honeypot.io/reads/being-a-senior-developer" target="_blank">As a senior engineer</a>, you will begin to work with leads/managers to design new systems and estimate the work needed in the overall project. Senior engineers should also be capable of presenting multiple solutions, understanding the benefits and drawbacks of each, and finally, be capable of articulating which solution is the best for the team. <strong>Senior engineers can also tend to spend less time actually programming and more time mentoring, designing, and leading. </strong></p>
            
            <p>A senior engineer tends to be a bridge between project managers, engineers, and management. By knowing the application, the architecture it resides in, and the approximate complexity of upcoming work, a senior engineer can help keep a project on track and provide support where needed.</p>
            
            <p>This sometimes leads a senior engineer to be more of a supportive role to the rest of the team, being able to fill gaps where needed and resolve blockers for other engineers. Additionally, <strong>senior engineers will have experience and foresight to see where team members may run into roadblocks and proactively remove them.</strong> A team&rsquo;s trust for a senior is important, as other team members will look to them to solve the problems they aren&rsquo;t sure how to solve and effectively teach the team during that process.</p>
            
            <p>Outside of the team, a senior engineer will also find opportunities for improvement within the organisation or business. <strong>They may begin to support shared code libraries for other teams to consume and support these codebases.</strong> They seek to find opportunities to remove duplicated work, remove tedious work, and increase the efficiency of teams. Perhaps certain teams are re-inventing the wheel and there is an opportunity for shared code amongst teams to make processes easier. <strong>These opportunities can sometimes be vague with high-level requirements, but a senior engineer should be able to take these vague situations and narrow them down to solutions without guidance. </strong></p>
            
            <h3>Education and skills</h3>
            
            <p>Due to the supportive nature of this role, soft skills become highly important. <strong>Knowing how to communicate with fellow teammates, respectfully discuss challenging topics, and interject to prevent conflict.</strong> By building relationships and soft skills within a team, a senior engineer can use these skills to help engineers who may be struggling with an issue.</p>
            
            <p>On the technical side, a senior engineer will be well versed in the technologies in use on a project as well as the big picture architecture for a project. <strong>Design patterns, architectures, and performance-enhancing tactics for applications should begin to become second nature</strong>. It&rsquo;s hard to get more specific than that without knowing your specialty, but I think you get the idea!</p>
            
            <h3>Senior Engineer salary</h3>
            
            <p>So at the top of the developer ladder, you&rsquo;ll have the most opportunities and be able to secure a really comfortable salary. <strong>In the US a salary for a senior engineer should start around $100-110k</strong>, but again, this will depend on your city and company.</p>
            
            <h2>4. How to become a tech lead</h2>
            
            <p><strong>The next logical step after becoming a senior engineer is into management.</strong> Management obviously isn&rsquo;t for everyone, but if this is where you are at, let&rsquo;s find out what you can expect.</p>
            
            <p>You&rsquo;ll be moving from an individual contributor into the people and project side of the business. The amount of coding for this type of role tends to be much smaller since being a manager you&rsquo;ll rely on your team to build what the project requires.</p>
            
            <h3>What to expect</h3>
            
            <p>Leaving the individual contributor (IC) side of the business isn&rsquo;t for everyone. <strong>Some senior engineers never make the jump to management because of the change of pace and style of work.</strong> Managers and leads will begin to rely more on their interpersonal connections, relationships, business skills, and previous experience to help them lead a team towards success on different projects.</p>
            
            <p>You&rsquo;ll need to lead your team and equally important, advocate for your team. Your job will be to keep your team on track towards the tangible delivery of items. This can mean providing your team with the resources they need to create new features or removing roadblocks that prevent them from completing their tasks.</p>
            
            <p><strong>This type of environment means as a manager you also need good knowledge about how your company&rsquo;s business model so know who to talk to when certain issues arise.</strong> A strong manager should be capable of knowing who to contact and rely on to solve specific issues for a team.</p>
            
            <p>In addition to the project side, a manager is also a role where you are responsible for helping your team members feel satisfied in their role and giving them opportunities to grow. <strong>You will help them achieve the goals they want, guide them through difficult situations within their team, and maybe even handle interpersonal conflicts between team members.</strong> This also means you&rsquo;ll need to handle situations with team members who are underperforming and help them get back on track. Expect to utilise soft skills heavily in a managerial role.</p>
            
            <h3>Education and skills</h3>
            
            <p>Depending on the organisation, management may require degrees in management or experience in management to achieve a role like this. <strong>More often than not, senior engineers can move into management roles because of their understanding of a company and their track record of success.</strong> Regardless of a company&#39;s requirements for a managerial role, soft skills are incredibly important.</p>
            
            <p>Understanding people, building relationships with people, calm and collected mannerisms during team conflicts, and difficult conversations tend to be the norm here. Continued learning on industry trends and continued practice of soft skills can help a manager succeed.</p>
            
            <h3>Tech lead salary</h3>
            
            <p>Just like every other salary range...it varies :) There tends to be an overlap here between Senior Engineers and Managers, however, <strong>a starting salary of around $110k and $120k is expected.</strong></p>
            
            <p>&nbsp;</p>
            
            <p>Becoming a software developer has many different phases. It starts in a very heads-down environment, developing individual debugging and development skills by learning from others. This leads to a more individual contributor role within a team, where they can be trusted to deliver a feature, of varying complexity, within the project timelines.</p>
            
            <p>The track record of proven execution leads a developer to mentor others, find areas for efficiency, and lead teams toward success. In great teams, software developers help each other learn and grow and challenge each other in a supportive way. <strong>Teams that help each other grow, execute great products, and continue to innovate in the fast-paced and ever-changing world of software development.</strong></p>',
        ]);
        Post::create([
            'title'=>'5 things to do during Pomodoro break without electronic devices',
            'slug'=>'5-things-to-do-during-pomodoro-break-without-electronic-devices-4',
            'user_id'=>'1',
            'category_id'=>'8',
            'imagePath'=>'postsImages/24XazgZTOg2rLWf9jj0GBADMDaeon78zxWfGTbKx.jpg',

            'body'=>'<p>When practicing productivity techniques like the Pomodoro or&nbsp;<a href="https://flowmodor.com/blog/flowtime-technique-the-best-pomodoro-alternative-for-time-management">Flowmodoro</a>&nbsp;methods, it&#39;s easy to dismiss the importance of breaks.</p>

            <p>During these breaks, it&#39;s tempting to immediately reach for your phone and spend the entire time scrolling, rationalizing it as a reward for your prior concentration.</p>
            
            <p>However, this habit not only makes it challenging to regain focus for the next session but also denies your eyes the rest they need. Therefore, I&#39;ll introduce five activities you can engage in during your breaks, all without the use of electronic devices.</p>
            
            <h2>1. Stretch your body 🤸</h2>
            
            <p>Stretching during breaks is not just a way to relieve physical tension but also to clear your mind. The nature of programming often demands extended durations of seated concentration, which can lead to physical rigidity. Simple stretching exercises can relieve muscle tension and also provide a mental reset, preparing you for the next phase of intense focus.</p>
            
            <h2>2. Go for a walk 🚶</h2>
            
            <p>A short walk is an excellent way to disconnect from your work. It&#39;s not just about the physical movement but also about changing your environment. Walking away from your workspace allows you to return with a fresh perspective. Whether it&#39;s a stroll around your office, a quick venture into your backyard, or just pacing in your room, the act of walking helps in resetting your mind, making you more creative and productive when you return.</p>
            
            <h2>3. Look off into the distance 🔭</h2>
            
            <p>Taking a quick break to look away from your computer screen is simple but really helpful. When you&#39;ve been staring at code for a while, it&#39;s good to give your eyes a rest. Try to find a spot where you can look out a window. Focus on something far away like the sky, trees, or distant buildings. This isn&#39;t just about resting your eyes; it&#39;s also a quiet moment for your mind. As you look away, take a few deep breaths. This easy break can help you feel more relaxed.</p>
            
            <h2>4. Organize your work desk 🧹</h2>
            
            <p>A cluttered desk can lead to a cluttered mind. Use your break to organize your workspace. Put away unnecessary items, arrange your documents, and clear any trash. A clean and organized environment can significantly boost your productivity and reduce stress levels.</p>
            
            <h2>5. Fill your water bottle &amp; visit the restroom 💧</h2>
            
            <p>Hydration is key to maintaining high energy levels and focus. Use your break to refill your water bottle. It&#39;s a simple act, but it ensures that you stay hydrated, especially important if you&#39;re so engrossed in your work that you forget to drink water. Additionally, a regular visit to the restroom is also important.</p>
            
            <h2>Wrapping up</h2>
            
            <p>In short, taking breaks is key to doing well at work or study. Using breaks wisely, by doing things like stretching, walking, looking into the distance, tidying up your desk, or getting water, isn&#39;t just a rest from work. It&#39;s a way to make sure you come back to your tasks with more focus and energy.</p>
            
            <p>These simple actions during breaks can help you feel better and work better. So, remember to step back, take a good break, and see the difference it makes in your day!</p>',
        ]);
    }
}
