/*
Navicat MySQL Data Transfer

Source Server         : LALA
Source Server Version : 50173
Source Host           : 
Source Database       : 

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2017-03-29 19:48:43
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Blog
-- ----------------------------
DROP TABLE IF EXISTS `Blog`;
CREATE TABLE `Blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) DEFAULT NULL,
  `article_content` varchar(5000) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `category` int(11) NOT NULL,
  `author` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Blog
-- ----------------------------
INSERT INTO `Blog` VALUES ('1', 'Fighting Fatigue? Get a Better Life', 'Feeling tired, zapped of energy? You\'re not the Lone Ranger.<br><br>\r\n						Doctors see it all the time: \"Women with four kids, a full-time job, and they get up at 5 to get everybody ready for the day. Their lives are very hectic, they only get four hours of sleep. They expect their bodies to do more than is realistic for one person,\" says Sharon Horesh, MD, primary care specialist with the Emory Clinic in Atlanta.<br><br>\r\n                        Fatigue has many origins. For women, anemia brought on by heavy menstrual cycles may cause fatigue. An underactive thyroid also causes fatigue. A cold, sinus infection, or virus can drag you out -- even for three or four weeks. But all too often, you\'re not taking care of yourself. It\'s as simple, and as difficult, as that.<br><br>			\r\n						First step, take stock of your life. If you can\'t juggle it all, get some perspective. \"Decide whether you\'re putting yourself under unnecessary stress,\" says Inyanga Mack, MD, professor of primary and community medicine at Temple University School of Medicine in Philadelphia.<br><br>\r\n						For many people -- especially women in their 30s and 40s -- severe anxiety and depression are leading causes of fatigue, says Horesh. \"Anxiety puts your body into overdrive and wears down the immune system. Some people even have medical symptoms like chest pain, racing heart, heart palpitations because their bodies are in overdrive. They\'re getting shots of adrenaline all the time.\"<br><br>\r\n						Exercise is a great stress-relief aide -- even if you\'re too tired for it, says Mack. \"If you\'re feeling overwhelmed, tired for whatever reason, exercise might be the last thing you feel like doing. But moderate amounts of exercise can actually help your mood. You will have more energy and require less sleep. Exercise will make you more tired at night, and you will fall into a deeper sleep, get better rest.\"<br><br>\r\n                        Even if you\'re trying to eat right, you may be doing it wrong. \"Diet is important,\" says Horesh. Fruits and vegetables fill you up with fewer calories. But they won\'t give you the long-lasting energy that you get from proteins and complex, starchy carbohydrates like whole-grain breads, pasta, rice, and beans.', '2017-02-10 11:34:00', '1', '17');
INSERT INTO `Blog` VALUES ('2', '7 Muscle Foods for Men', 'Building abs and sculpting muscles starts long before you ever hit the gym.<br><br>\r\n\r\nMuscle growth requires a formula based on drinking plenty of fluids and eating the right energy-rich foods along with lifting weights. The right formula will fuel workouts, repair muscle tissue, and help you sculpt your physique.<br><br>\r\n\r\nNutrition Game Plan<br><br>\r\n\r\n1. Fruit and vegetables are the foundation of all healthy diets, providing fiber, vitamins, minerals, and fluids. Vegetables contain small amounts of protein.<br><br>\r\n\r\n2. Low-fat dairy provides high-quality protein, carbs, and essential vitamins such as vitamin D, potassium, and calcium. Sports nutritionists Christine Rosenbloom, PhD, RD, and Nancy Clark, RD, recommend chocolate milk as a good workout recovery beverage. If you are lactose intolerant, you can try yogurt with active cultures.<br><br>\r\n\r\n3. Low-fat dairy provides high-quality protein, carbs, and essential vitamins such as vitamin D, potassium, and calcium. Sports nutritionists Christine Rosenbloom, PhD, RD, and Nancy Clark, RD, recommend chocolate milk as a good workout recovery beverage. If you are lactose intolerant, you can try yogurt with active cultures.<br><br>\r\n\r\n4. Dark-meat chicken, compared to white meat, provides 25% more iron and three times the zinc for a healthy immune system.<br><br>\r\n\r\n5. Eggs \"contain all of the essential amino acids,\" Rosenbloom says. One a day is fine according to the 2010 Dietary Guidelines, but don’t throw out the yolk. According to Rosenbloom, \"Half the protein is in the yolk along with other import nutrients like lutein for eye health.”<br><br>\r\n\r\n6. Nuts -- unsalted and either raw or roasted -- are a good source of protein. They also contain vitamins, antioxidants, fiber, and healthy fats.<br><br>\r\n\r\n7. Beans and whole grains are quality carbs that contain small amounts of protein for energy and muscle repair along with fiber, vitamins, and antioxidants.', '2017-01-01 17:04:19', '2', '21');
INSERT INTO `Blog` VALUES ('3', '5 Ways to Help Unfit Teens Get Moving', 'No teen is doomed to be overweight.<br><br>\r\n\r\nA 2010 European study showed that even teenagers with gene-linked obesity are able to overcome it by exercising for 60 minutes a day. For the teens in the study who exercised regularly, it paid off in lower body fat, a lower body mass index (BMI), and a smaller waist.<br><br>\r\n\r\nHere are five tips to help you help your teen ease into exercise and stay motivated so that she can feel the benefits.<br><br>\r\n\r\nTeen Fitness Tip 1: Build Slowly<br><br>\r\n\r\nKids who aren\'t used to exercising may only be willing to tolerate a little physical activity before wanting to quit. So start with small steps, such as a 10-minute walk every day after school. (If the thought of exercising every day seems overwhelming to him, start off with walking every other day.) Add a minute more of walking each time, and have him track his progress.<br><br>\r\n\r\nTeen Fitness Tip 2: Make Screen Time Count<br><br>\r\n\r\nAll the time your teen spends in front of a TV or computer is time he or she is not being active. The American Academy of Pediatrics recommends no more than two hours a day of watching TV or playing video or computer games. So work together to set house rules on screen time.<br><br>\r\n\r\nTeen Fitness Tip 3: Make Workouts Enjoyable<br><br>\r\n\r\nThe best exercise program is the one your teen will actually do. Does your son like nature and animals? Check out local outdoor clubs or organizations that sponsor outdoor activities such as camping, hiking, and bird watching. If your daughter likes martial arts, dancing, or gymnastics, look for classes that would interest her at your local YMCA, school, church, or community center. Even activities such as drama can get teens out of their chairs and off their beds.<br><br>\r\n\r\nTeen Fitness Tip 4: Consider Weight Training<br><br>\r\n\r\nStrength training, or resistance training, may be a good activity for teens who are not yet used to aerobic exercise. A 2009 study showed that doing resistance exercises three days a week can significantly lower body fat and increase muscle, strength, and power in obese children.<br><br>\r\n\r\nTeen Fitness Tip 5: Encourage Participation in Sports<br><br>\r\n\r\nIf your teen enjoys watching sports, she may enjoy playing them just as much. Overweight teens may benefit from joining a sports team that is grouped by skill instead of age. If your teen dislikes or is uncomfortable with the idea of competitive sports, encourage a sport such as cycling or running. ', '2016-12-17 17:13:19', '3', '23');
INSERT INTO `Blog` VALUES ('4', 'Healthy Eating for Weight Loss', 'Most health experts recommend that you eat a balanced, healthy diet to maintain or to lose weight. But exactly what is a healthy diet?<br><br>\r\n\r\nIt should include:<br><br>\r\n\r\nProtein (found in fish, meat, poultry, dairy products, eggs, nuts, and beans)<br><br>\r\n\r\nFat (found in animal and dairy products, nuts, and oils)<br><br>\r\n\r\nCarbohydrates (found in fruits, vegetables, whole grains, and beans and other legumes)<br><br>\r\n\r\nVitamins (such as vitamins A, B, C, D, E, and K)<br><br>\r\n\r\nMinerals (such as calcium, potassium, and iron)<br><br>\r\n\r\nWater (both in what you drink, and what\'s naturally in foods)<br><br>\r\n\r\nDieting or not, everyone needs a mix of those nutrients, ideally from foods. A good general rule is to use MyPlate, which makes it easy to envision just how much of each food type to include in your meal.<br><br>\r\n\r\nFill half your plate with fruits and vegetables. Split the other half between whole grains and lean protein. Stick to your calorie “budget,” because when you\'re working on losing weight, you need to burn more calories than you eat or drink.<br><br>\r\n\r\nExactly how many calories you should get per day depends on your goal, your age, your sex, and how active you are. A dietitian can help you figure that out. Don\'t cut your calories too much, or your diet is going to be hard to stick with and may not give you the nutrients your body needs.<br><br>', '2016-11-18 17:20:09', '1', '24');
INSERT INTO `Blog` VALUES ('5', '9 Tips for a Heart-Healthy Diet', 'Eating a heart-healthy diet pays big benefits, like better cholesterol and blood sugar levels, blood pressure, and weight.\r\n<br><br>\r\nTake these nuggets of nutrition wisdom to heart:\r\n<br><br>\r\n1. Eat more fish. Fish is a good source of protein and other nutrients. Some fish, such as salmon, tuna, and mackerel, also gives you omega-3 fatty acids, which may cut your risk of heart disease and stroke. The American Heart Association recommends two servings a week of fish that are rich in omega-3s.\r\n<br><br>\r\n2. Eat more vegetables, fruits, whole grains, and beans. Plant foods are a powerful help in fighting heart disease. You get nutrients, fiber, and almost endless variety that you can cook in many different ways.\r\n<br><br>\r\n3. Avoid artificial trans fats completely. They raise your \"bad\" (LDL) cholesterol level. Items that may have trans fat include baked goods, snack foods (such as microwave popcorn), frozen pizza, fast food, vegetable shortenings, stick margarines, coffee creamer, refrigerated dough products (such as biscuits and cinnamon rolls), and ready-to-use frostings. Even if the label says \"0 grams trans fat,\" they may still have a tiny bit of trans fat; so check the ingredients list on packaged foods for \"partially hydrogenated oils.\" Those are trans fats.\r\n<br><br>\r\n4. Limit saturated fat to no more than 7% to 10% of calories. Check food labels to see how much saturated fat is in a serving of butter, hard margarine, salad dressing, fried foods, snack foods, sweets, and desserts.\r\n<br><br>\r\n5. When you use added fat, use fats high in monounsaturated or polyunsaturated fats (for example, fats found in canola, olive, and peanut oil). You still need to limit how much you use, even with \"good\" fats, because they are high in calories.\r\n<br><br>\r\n6. Eat a variety of protein foods. Favor fish, lean cuts of meat, poultry (without the skin), low-fat or fat-free dairy, beans, nuts, tofu, and legumes.\r\n<br><br>\r\n7. Cut back on salt. This will help control your blood pressure. Most people get too much sodium, and a lot of it comes from packaged foods.\r\n<br><br>\r\n8. Enjoy every bite. When you enjoy what you eat, it\'s easier to keep eating that way.', '2016-09-12 17:30:04', '1', '26');
INSERT INTO `Blog` VALUES ('6', 'Vitamins Women Need', 'It\'s a message you\'ve probably heard before: Keep yourself healthy with the right mix of vitamins. But which ones, you wonder, and should I pop pills or get the nutrients through the food I eat?\r\n<br><br>\r\nThe best thing to do is to keep up a balanced diet. But supplements can be a good way to fill in the gaps when they happen.\r\n<br><br>\r\nBeta-carotene. Your body changes it to vitamin A, a nutrient that helps eyesight, soft tissue, and skin. You\'ll find it in apricots, cantaloupe, carrots, guava, kale, papaya, peaches, pumpkins, red peppers, spinach, and tomatoes.\r\n<br><br>\r\nVitamin C. You may also hear it called ascorbic acid. It heals wounds and helps your body make red blood cells. It also boosts levels of the brain chemical called noradrenaline, which makes you feel more alert and amps up your concentration.\r\n<br><br>\r\nVitamin E. It\'s also known as tocopherol and includes related compounds called tocotrienols. Your body needs it to keep cells healthy. It may slow signs of aging, too. But you raise your risk of bleeding if you take too much of it every day. You can get this nutrient in foods like margarine, corn oil, cod-liver oil, hazelnuts, peanut butter, safflower oil, sunflower seeds, and wheat germ.\r\n<br><br>\r\nB Vitamins. There are a few types of these nutrients, and they\'re all good for your body. But three of them -- vitamins B6, B12, and folic acid -- are especially important.\r\n<br><br>\r\nFolate (folic acid). It helps build a healthy brain and spinal cord. It also makes DNA and RNA, the building blocks of cells, and prevents the changes in DNA that can lead to cancer. Adults and children need it to build normal red blood cells and prevent anemia. But it\'s especially important for pregnant women because it helps prevent birth defects like spina bifida.\r\n<br><br>\r\nVitamin D. It may be called a vitamin, but it actually works as a hormone. It helps to move calcium and phosphorus -- important minerals for keeping bones strong -- into your bloodstream. When your body doesn\'t have enough vitamin D, it will take calcium and phosphorus from your bones. Over time, this makes them thin and leads to conditions like osteoporosis, which puts you at risk for fractures.\r\n<br><br>\r\nVitamin K. It plays an important role in keeping bones strong and helping blood clot for older people. The best food sources include green leafy vegetables, soybean oil, broccoli, alfalfa, cooked spinach, and fish oil.\r\n<br><br>\r\nFoods vs. Supplements: Which Is Better? Most dietitians say it\'s better to get key vitamins from foods without relying on supplements. But talk to your doctor to see what’s right for you. Follow his directions so you don\'t take more than you should.', '2016-11-11 17:33:58', '1', '27');
INSERT INTO `Blog` VALUES ('7', 'Flat Abs for Men: Go-to Exercises', 'Flat abs symbolize peak physical fitness, and in the celebrity tabloids abs have also become a kind of yardstick for sex appeal.\r\n<br><br>\r\nBut the craze for buff abs isn’t only about looking good without a shirt. Training the abs is often associated with vanity, but that perception is changing, thanks to the \"core fitness\" principles espoused by high-profile professional trainers like Chris Robinson, author of The Core Connection, trainer to celebrities, Pilates expert, and champion Muay Thai fighter.\r\n<br><br>\r\n\"Every movement should initiate from the stomach region,\" Robinson says. \"If you curl your little finger, you should still feel your stomach.\"\r\n<br><br>\r\nThe abs, also known as the rectus abdominis, are bands of muscle connecting the pelvis with the rib cage. It’s these muscles that form a \"six pack\" when they’re well developed and not hidden under belly fat. The abs get the most press, but they don’t work alone. They function with a group of other so-called \"core\" muscles, including the obliques, which wrap around the sides of the torso, and muscles that move the spine and pelvis.\r\n<br><br>\r\nThe core muscles are important because they connect the upper and lower body; they’re essential for the coordinated movement of the whole body. Strengthening the core muscles can make you more fit for all kinds of activity.\r\n<br><br>\r\nHaving relatively weak abs compared to your back muscles can make you more prone to muscle injuries and lower back pain. The back is normally somewhat stronger than the abs, but there shouldn’t be a drastic imbalance between them, says William Kraemer, PhD, an exercise physiologist at the University of Connecticut and a member of the American College of Sports Medicine.\r\n<br><br>\r\n\"It’s always a relationship between the front and back. You’ve got to train both sides of the body,\" he says.\r\n<br><br>\r\nRobinson says he sees more men than women with greater strength in the back muscles than in the abs. \"Ninety percent of my male clients, as opposed to 20% of my female clients, have that issue.\"', '2017-01-20 20:31:03', '2', '27');
INSERT INTO `Blog` VALUES ('8', '7 Risky Exercises and Better Bets', 'Who has time to waste on ineffective, risky exercises? Not you. So ditch these seven moves that won\'t deliver the results you want -- and may even cause injury.\r\n<br><br>\r\nNo. 1: Lat Pull-down Behind the Head\r\n<br><br>\r\nThe problem: Only people with very mobile shoulder joints can keep their spines straight enough to do this exercise properly. So the move — done wrong — can lead to several complications including shoulder impingement or worse, a tear in the rotator cuff. And if the bar hits the back of the neck, it could injure cervical vertebrae.\r\n<br><br>\r\nA Safer Lat Pull-down\r\n<br><br>\r\nOn the pull–down machine, lean back a few degrees, use a wider–than–shoulder grip, and bring the bar down in front of your body to the breastbone, pulling shoulder blades down and together. Contract your abdominals to stabilize the body, and avoid using momentum to swing the bar up and down. The lat pull–down works both lower and upper back muscles.\r\n<br><br>\r\nNo. 2: Military Press Behind the Head\r\n<br><br>\r\nThis shoulder move, in which you lift a barbell up and down behind the head, can cause the same problems as the lat pull–down behind the head.\r\n<br><br>\r\nA Safer Military Press\r\n<br><br>\r\nA safer shoulder alternative: When doing the military press, keep the bar in front of your head. Stand with the weight no lower than the collarbone and keep your upper body upright. The exercise can also be done seated. Always sit straight against a back support, and keep the natural curve in your spine, with upper back and glutes pressed to the chair.\r\n<br><br>\r\nNo. 3: Upright Row\r\n<br><br>\r\nThe problem: Pulling weights, a barbell, or a weighted cabled bar up under your chin can compress the nerves in the shoulder area, impinging the shoulder and causing possible nerve damage.\r\n<br><br>\r\nSafer Alternative to the Upright Row\r\n<br><br>\r\nInstead of doing an upright row, work your shoulders with a front or lateral shoulder raise, lifting weights out to the front or side of the body. Keep a slight bend in your arms.', '2016-12-28 20:32:49', '2', '28');
INSERT INTO `Blog` VALUES ('9', 'Teen Alcohol and Drug Abuse', 'What is teen substance abuse?\r\n<br><br>\r\nMany teens try alcohol, tobacco, or drugs. Some teens try these substances only a few times and stop. Others can\'t control their urges or cravings for them. This is substance abuse.\r\n<br><br>\r\nTeens may try a number of substances, including cigarettes, alcohol, household chemicals (inhalants), prescription and over-the-counter medicines, and illegal drugs. Teens use alcohol more than any other substance. Marijuana is the illegal drug that teens use most often.\r\n<br><br>\r\nWhy do teens abuse drugs and alcohol?\r\n<br><br>\r\nTeens may use a substance for many reasons. They may do it because:\r\n<br><br>\r\n    They want to fit in with friends or certain groups.\r\n	<br><br>\r\n    They like the way it makes them feel.\r\n	<br><br>\r\n    They believe it makes them more grown up.\r\n<br><br>\r\nTeens tend to try new things and take risks, so they may take drugs or drink alcohol because it seems exciting.\r\n<br><br>\r\nTeens with family members who have problems with alcohol or other drugs are more likely to have serious substance abuse problems. Also, teens who feel that they are not connected to or valued by their parents are at greater risk. Teens with poor self-esteem or emotional or mental health problems, such as depression, also are at increased risk.\r\n<br><br>\r\nWhat problems can teen substance abuse cause?\r\n<br><br>\r\nSubstance abuse can lead to serious problems such as poor schoolwork, loss of friends, problems at home, and lasting legal problems. Alcohol and drug abuse is a leading cause of teen death or injury related to car crashes, suicides, violence, and drowning. Substance abuse can increase the risk of pregnancy and sexually transmitted infections (STIs), including HIV, because of unprotected sex. Even occasional alcohol use by a teen increases the risk for future alcohol and drug problems.\r\n<br><br>\r\nEven casual use of certain drugs can cause severe health problems, such as an overdose or brain damage. Many illegal drugs today are made in home labs, so they can vary greatly in strength. These drugs also may contain bacteria, dangerous chemicals, and other unsafe substances.\r\n\r\n\r\n', '2016-10-22 20:36:48', '3', '29');
INSERT INTO `Blog` VALUES ('10', 'Physical Exams and Teen Sports', 'Playing on a community or school sports team is a great way for teens to stay in shape and learn teamwork. That\'s probably why more than 38 million American children and teenagers play at least one sport.\r\n<br><br>\r\nNo matter which sport your teen plays -- whether it\'s soccer, football, baseball, track, or martial arts -- there\'s always a risk of getting hurt. The casualties of teen sports can range from minor sprained ankles and repetitive strains, to more serious conditions like heat stroke or exercise-induced asthma. Some kids have serious allergic reactions to bees and other stinging insects found around playing fields.\r\n<br><br>\r\nTo avoid getting hurt or sick on the field, court, and track, teens need to be prepared. That preparation starts with seeing a health care provider for a sports physical to make sure their bodies are ready for the season ahead and that there isn’t a family history or past medical history that requires further attention.\r\n<br><br>\r\nSome states won\'t let young athletes start a season or play a new sport without first having a sports physical. Even if your state doesn\'t require a sports physical, it\'s a good idea for every teen who plays a sport to get one annually to make sure they\'re in top shape and healthy enough to safely participate.\r\n<br><br>\r\nWhat Is a Sports Physical?\r\n<br><br>\r\nA sports physical -- also known as a pre-participation physical examination -- is a check-up to assess a teen\'s health and fitness as it relates to a sport. It is not the same as a regular physical. During the sports physical, the health care provider looks for any diseases or injuries that could make it unsafe to participate in sports and reviews the family\'s medical history to ensure additional tests are performed if necessary.', '2017-03-24 20:38:53', '3', '30');

-- ----------------------------
-- Table structure for Blog_category
-- ----------------------------
DROP TABLE IF EXISTS `Blog_category`;
CREATE TABLE `Blog_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Blog_category
-- ----------------------------
INSERT INTO `Blog_category` VALUES ('1', 'Women\'s Health');
INSERT INTO `Blog_category` VALUES ('2', 'Men\'s Health');
INSERT INTO `Blog_category` VALUES ('3', 'Teen health');

-- ----------------------------
-- Table structure for Blog_follower
-- ----------------------------
DROP TABLE IF EXISTS `Blog_follower`;
CREATE TABLE `Blog_follower` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Blog_follower
-- ----------------------------
INSERT INTO `Blog_follower` VALUES ('1', '1', '16');
INSERT INTO `Blog_follower` VALUES ('14', '1', '27');
INSERT INTO `Blog_follower` VALUES ('18', '1', '20');
INSERT INTO `Blog_follower` VALUES ('19', '1', '21');
INSERT INTO `Blog_follower` VALUES ('17', '1', '26');
INSERT INTO `Blog_follower` VALUES ('20', '2', '16');
INSERT INTO `Blog_follower` VALUES ('21', '2', '18');
INSERT INTO `Blog_follower` VALUES ('22', '2', '25');
INSERT INTO `Blog_follower` VALUES ('23', '3', '22');
INSERT INTO `Blog_follower` VALUES ('24', '3', '24');
INSERT INTO `Blog_follower` VALUES ('25', '3', '25');
INSERT INTO `Blog_follower` VALUES ('26', '4', '22');
INSERT INTO `Blog_follower` VALUES ('27', '5', '19');
INSERT INTO `Blog_follower` VALUES ('28', '3', '26');
INSERT INTO `Blog_follower` VALUES ('29', '6', '26');
INSERT INTO `Blog_follower` VALUES ('30', '4', '26');
INSERT INTO `Blog_follower` VALUES ('31', '3', '16');

-- ----------------------------
-- Table structure for Blog_Img
-- ----------------------------
DROP TABLE IF EXISTS `Blog_Img`;
CREATE TABLE `Blog_Img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Blog_Img
-- ----------------------------
INSERT INTO `Blog_Img` VALUES ('1', '1', 'images/blog/field-847647_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('2', '2', 'images/blog/glasses-1872805_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('3', '3', 'images/blog/bike-1523415_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('4', '4', 'images/blog/fresh-orange-juice-1614822_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('5', '5', 'images/blog/almonds-1768792_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('6', '6', 'images/blog/pomegranate-1647930_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('7', '7', 'images/blog/man-461195_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('8', '8', 'images/blog/silhouette-1975689_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('9', '9', 'images/blog/alcohol-1569435_1280.jpg');
INSERT INTO `Blog_Img` VALUES ('10', '10', 'images/blog/race-941732_1280.jpg');

-- ----------------------------
-- Table structure for Comment
-- ----------------------------
DROP TABLE IF EXISTS `Comment`;
CREATE TABLE `Comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Comment
-- ----------------------------
INSERT INTO `Comment` VALUES ('1', '\"Shoulds\" are the enemy of relaxation. Don\'t think about what you should do, but about what makes you thrive. ', '18', '1', '2017-02-10 14:28:32');
INSERT INTO `Comment` VALUES ('2', 'It is a delicate balance of eating enough calories to build muscle but not too many calories, which can lead to gaining body fat.', '22', '2', '2017-02-01 16:09:42');
INSERT INTO `Comment` VALUES ('3', 'Most people don’t eat by the numbers. ', '18', '2', '2017-01-21 17:10:29');
INSERT INTO `Comment` VALUES ('4', 'As a parent, our example and encouragement can help them do that. ', '19', '3', '2017-01-29 17:17:41');
INSERT INTO `Comment` VALUES ('5', 'cool', '25', '4', '2017-01-27 17:27:01');
INSERT INTO `Comment` VALUES ('16', 'Very useful!!!!QAQ', '16', '1', '2017-03-20 11:49:38');
INSERT INTO `Comment` VALUES ('17', 'Mark!', '16', '1', '2017-03-20 11:58:21');
INSERT INTO `Comment` VALUES ('18', 'Interesting', '27', '1', '2017-03-20 12:22:43');
INSERT INTO `Comment` VALUES ('19', 'Cool!', '26', '3', '2017-03-20 19:31:39');
INSERT INTO `Comment` VALUES ('20', 'Very useful!', '26', '3', '2017-03-20 19:32:51');
INSERT INTO `Comment` VALUES ('21', 'Ich bin muskulÃ¶s! Superï¼', '16', '2', '2017-03-24 21:33:59');
INSERT INTO `Comment` VALUES ('22', 'Good!', '16', '5', '2017-03-24 23:52:18');

-- ----------------------------
-- Table structure for Food
-- ----------------------------
DROP TABLE IF EXISTS `Food`;
CREATE TABLE `Food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_name` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` decimal(6,2) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Food
-- ----------------------------
INSERT INTO `Food` VALUES ('1', '60g White Basmati Rice', '1', '0.90', 'images/cafe/78e3b59f5f4414b815371c.jpg');
INSERT INTO `Food` VALUES ('2', '60g Gluten-Free Potatoes', '1', '1.00', 'images/cafe/potato-954019_1280.jpg');
INSERT INTO `Food` VALUES ('3', '1 Salmon Fillet（Lemon sauce)', '2', '3.50', 'images/cafe/abstract-1238667_1280.jpg');
INSERT INTO `Food` VALUES ('4', '1 Chicken Fillet（our own sause）', '2', '2.50', 'images/cafe/turkey-hen-569069_1280.jpg');
INSERT INTO `Food` VALUES ('5', '100g Carrots', '3', '1.25', 'images/cafe/agriculture-1851424_1280.jpg');
INSERT INTO `Food` VALUES ('6', '100g Broccoli', '3', '0.99', 'images/cafe/broccoli-1974764_1280.jpg');
INSERT INTO `Food` VALUES ('7', 'Orange Juice', '4', '1.50', 'images/cafe/orange-1995044_1280.jpg');
INSERT INTO `Food` VALUES ('8', 'LEMON TEA', '4', '1.50', 'images/cafe/tea-1961590_1280.jpg');

-- ----------------------------
-- Table structure for Food_Category
-- ----------------------------
DROP TABLE IF EXISTS `Food_Category`;
CREATE TABLE `Food_Category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Food_Category
-- ----------------------------
INSERT INTO `Food_Category` VALUES ('1', 'GRAINS');
INSERT INTO `Food_Category` VALUES ('2', 'MEAT');
INSERT INTO `Food_Category` VALUES ('3', 'VETETABLES');
INSERT INTO `Food_Category` VALUES ('4', 'DRINKS');

-- ----------------------------
-- Table structure for Recipe_Img
-- ----------------------------
DROP TABLE IF EXISTS `Recipe_Img`;
CREATE TABLE `Recipe_Img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_id` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Recipe_Img
-- ----------------------------
INSERT INTO `Recipe_Img` VALUES ('1', '3', 'images/recipes/thai-green-pork-lettuce-cups.jpg');
INSERT INTO `Recipe_Img` VALUES ('2', '4', 'images/recipes/chicken-fattoush.jpg');
INSERT INTO `Recipe_Img` VALUES ('3', '5', 'images/recipes/recipe-image-legacy-id--1309491_2.jpg');
INSERT INTO `Recipe_Img` VALUES ('4', '6', 'images/recipes/recipe-image-legacy-id--195496_11.jpg');
INSERT INTO `Recipe_Img` VALUES ('5', '7', 'images/recipes/recipe-image-legacy-id--192665_11.jpg');
INSERT INTO `Recipe_Img` VALUES ('6', '8', 'images/recipes/smoky-beans-on-toast.jpg');
INSERT INTO `Recipe_Img` VALUES ('7', '9', 'images/recipes/seafood-tagine.jpg');
INSERT INTO `Recipe_Img` VALUES ('8', '10', 'images/recipes/thai-prawn-ginger-noodles.jpg');
INSERT INTO `Recipe_Img` VALUES ('9', '11', 'images/recipes/recipe-image-legacy-id--338860_11.jpg');
INSERT INTO `Recipe_Img` VALUES ('10', '12', 'images/recipes/recipe-image-legacy-id--192540_11.jpg');
INSERT INTO `Recipe_Img` VALUES ('11', '13', 'images/recipes/stirfrychicken_5795.jpg');
INSERT INTO `Recipe_Img` VALUES ('12', '14', 'images/recipes/spicychickenavocadowraps_5865.jpg');

-- ----------------------------
-- Table structure for Recipes
-- ----------------------------
DROP TABLE IF EXISTS `Recipes`;
CREATE TABLE `Recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipe_name` varchar(255) DEFAULT NULL,
  `content` varchar(4000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Recipes
-- ----------------------------
INSERT INTO `Recipes` VALUES ('3', 'Thai green pork lettuce cups', '1. Heat the oil in a frying pan and cook the pork for 8-10 mins or until cooked through. Stir in the green curry paste and 2 tbsp water, then cook for 1-2 mins.\r\n							 <br>\r\n                             2. Remove from the heat and stir in the red onion, lime juice, fish sauce and herbs. Spoon the pork into the lettuce leaves and serve with rice, if you like. \r\nRemove from the heat and stir in the red onion, lime juice, fish sauce and herbs. Spoon the pork into the lettuce leaves and serve with rice, if you like.');
INSERT INTO `Recipes` VALUES ('4', 'Chicken fattoush', '1. Pour the lemon juice into a large bowl and whisk while you slowly add the oil. When all the oil has been added and the mixture starts to thicken, season.\r\n							 <br>\r\n                             2. Add the lettuce, tomatoes, parsley, cucumber, chicken pieces and spring onions, and stir well to coat the salad in the dressing.\r\n                             <br>\r\n                             3. Put the pitta breads in the toaster until crisp and golden, then chop into chunks. Scatter the toasted pitta pieces over the salad and sprinkle over the sumac. Serve straight away.');
INSERT INTO `Recipes` VALUES ('5', 'Vitality chicken salad with avocado dressinga', '1. Blanch the soya beans for 3 mins. Rinse in cold water and drain thoroughly. Put the chicken, beans and cucumber in a bowl.<br>\r\n                             2. Blitz the avocado, Tabasco, lemon juice and oil in a food processor or with a hand blender. Season, pour into the bowl and mix well to coat.<br>\r\n                             3. Spoon the mixture into the lettuce leaves (or serve it alongside them) and sprinkle with the seeds. Chill until lunch, then serve with a lemon wedge.');
INSERT INTO `Recipes` VALUES ('6', 'Superhealthy salmon burgers', '1. Tip the salmon into a food processor with the paste, ginger, soy and chopped coriander. Pulse until roughly minced. Tip out the mix and shape into 4 burgers. Heat the oil in a non-stick frying pan, then fry the burgers for 4-5 mins on each side, turning until crisp and cooked through.<br>\r\n                             2. Meanwhile, use a swivel peeler to peel strips of carrot and cucumber into a bowl. Toss with the vinegar and sugar until the sugar has dissolved, then toss through the coriander leaves. Divide the salad between 4 plates. Serve with the burgers and rice.');
INSERT INTO `Recipes` VALUES ('7', 'Thai-style steamed fish', '1. Nestle the fish fillets side by side on a large square of foil and scatter the ginger, garlic, chilli and lime zest over them. Drizzle the lime juice on top and then scatter the pieces of pak choi around and on top of the fish. Pour the soy sauce over the pak choi and loosely seal the foil to make a package, making sure you leave space at the top for the steam to circulate as the fish cooks.<br>\r\n                             2. Steam for 15 minutes. (If you haven’t got a steamer, put the parcel on a heatproof plate over a pan of gently simmering water, cover with a lid and steam.)');
INSERT INTO `Recipes` VALUES ('8', 'Smoky beans on toast', '1. Heat the oil in a small pan, add the onion and pepper, and fry gently until soft, about 10-15 mins. Crush half the garlic and add this to the pan, along with the tomatoes, paprika, vinegar, beans, sugar and some seasoning. Bring to a simmer and cook for 10-15 mins or until slightly reduced and thickened.<br>\r\n                            2. Toast the bread, rub with the remaining garlic and drizzle with a little oil. Spoon the beans over the toast, drizzle with a little more oil and scatter over the parsley.');
INSERT INTO `Recipes` VALUES ('9', 'Seafood tagine', '1. Heat the oil in a large pan and cook the onion and red pepper for about 5 mins until softened. Stir in the garlic, harissa and chopped tomatoes, and cook for about 10 mins until thickened. Add the frozen seafood and cook through, about 10 mins more.<br>\r\n                             2. Put the couscous in a serving bowl, pour over boiling water to cover, then cover with cling film. Leave to soak while the tagine cooks, then stir in most of the coriander, the almonds, lemon zest and juice, and seasoning. Serve the tagine with the couscous and cut the remaining lemon half into wedges to squeeze over. Sprinkle over the remaining coriander and serve.');
INSERT INTO `Recipes` VALUES ('10', 'Thai prawn & ginger noodles', '1. Put the noodles in a bowl and pour over boiling water to cover them. Set aside to soak for 10 mins. Stir together the orange juice and zest, curry paste, fish sauce, sugar and 3 tbsp water to make a sauce.<br>\r\n                             2. Heat the oil in a large wok and add half the ginger and the garlic. Cook, stirring, for 1 min. Add the pepper and stir-fry for 3 mins more. Toss in the sugar snaps, cook briefly, then pour in the curry sauce. Add the beansprouts and prawns, and continue cooking until the prawns just turn pink. Drain the noodles, then toss these into the pan with the herbs and remaining ginger. Mix until the noodles are well coated in the sauce, then serve.');
INSERT INTO `Recipes` VALUES ('11', 'Mac and Cheese', '1. Heat oven to 200C/fan 180C/gas 6. Put the tomatoes onto a baking tray, rub with a little oil and some seasoning, then roast for 5 mins until the skins are starting to split. Add the fish to the tray, top with most of the lemon zest and some more seasoning, then drizzle with a little more oil. Roast for 8-10 mins until the fish flakes easily.<br>\r\n                             2. Heat oven to 200C/fan 180C/gas 6. Put the tomatoes onto a baking tray, rub with a little oil and some seasoning, then roast for 5 mins until the skins are starting to split. Add the fish to the tray, top with most of the lemon zest and some more seasoning, then drizzle with a little more oil. Roast for 8-10 mins until the fish flakes easily.');
INSERT INTO `Recipes` VALUES ('12', 'Superhealthy salmon salad', '1. Heat water in a tier steamer. Season the couscous, then toss with 1 tsp oil. Pour boiling water over the couscous so it covers it by 1cm, then set aside. When the water in the steamer comes to the boil, tip the broccoli into the water, then lay the salmon in the tier above. Cook for 3 mins until the salmon is cooked and the broccoli tender. Drain the broccoli and run it under cold water to cool.<br>\r\n                             2. Heat water in a tier steamer. Season the couscous, then toss with 1 tsp oil. Pour boiling water over the couscous so it covers it by 1cm, then set aside. When the water in the steamer comes to the boil, tip the broccoli into the water, then lay the salmon in the tier above. Cook for 3 mins until the salmon is cooked and the broccoli tender. Drain the broccoli and run it under cold water to cool.</p>');
INSERT INTO `Recipes` VALUES ('13', 'Stir-fried chicken with broccoli & brown rice', '1. Put the kettle on to boil and tip the broccoli into a medium pan ready to go on the heat. Pour the water over the broccoli then boil for 4 mins.<br>\r\n                             2. Heat the olive oil in a non-stick wok and stir-fry the ginger, garlic and onion for 2 mins, add the mild chilli powder and stir briefly. Add the chicken and stir-fry for 2 mins more. Drain the broccoli and reserve the water. Tip the broccoli into the wok with the soy, honey, red pepper and 4 tbsp broccoli water then cook until heated through. Meanwhile, heat the rice following the pack instructions and serve with the stir-fry.');
INSERT INTO `Recipes` VALUES ('14', 'Spicy chicken & avocado wraps', '1. Mix the chicken with the lime juice, chilli powder and garlic.<br>\r\n                             2. Heat the oil in a non-stick frying pan then fry the chicken for a couple of mins – it will cook very quickly so keep an eye on it. Meanwhile, warm the wraps following the pack instructions or, if you have a gas hob, heat them over the flame to slightly char them. Do not let them dry out or they are difficult to roll.<br>\r\n                             3. Heat the oil in a non-stick frying pan then fry the chicken for a couple of mins – it will cook very quickly so keep an eye on it. Meanwhile, warm the wraps following the pack instructions or, if you have a gas hob, heat them over the flame to slightly char them. Do not let them dry out or they are difficult to roll.');

-- ----------------------------
-- Table structure for Shopping_cart
-- ----------------------------
DROP TABLE IF EXISTS `Shopping_cart`;
CREATE TABLE `Shopping_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Shopping_cart
-- ----------------------------
INSERT INTO `Shopping_cart` VALUES ('5', '6', '26', '1', '149019648026');
INSERT INTO `Shopping_cart` VALUES ('4', '7', '26', '2', '149019647126');
INSERT INTO `Shopping_cart` VALUES ('3', '5', '26', '2', '149018113626');
INSERT INTO `Shopping_cart` VALUES ('32', '8', '20', '1', '149070423320');
INSERT INTO `Shopping_cart` VALUES ('31', '7', '20', '1', '149070422820');
INSERT INTO `Shopping_cart` VALUES ('26', '2', '16', '5', '149040105116');
INSERT INTO `Shopping_cart` VALUES ('27', '4', '16', '5', '149040105116');
INSERT INTO `Shopping_cart` VALUES ('13', '2', '19', '1', '149037848519');
INSERT INTO `Shopping_cart` VALUES ('28', '6', '16', '5', '149040105116');
INSERT INTO `Shopping_cart` VALUES ('35', '8', '16', '2', '149080645116');
INSERT INTO `Shopping_cart` VALUES ('30', '5', '20', '1', '149070422120');
INSERT INTO `Shopping_cart` VALUES ('33', '1', '19', '1', '149079561919');
INSERT INTO `Shopping_cart` VALUES ('34', '3', '19', '1', '149079562319');
INSERT INTO `Shopping_cart` VALUES ('37', '2', '20', '1', '149081021720');
INSERT INTO `Shopping_cart` VALUES ('38', '4', '20', '1', '149081021720');
INSERT INTO `Shopping_cart` VALUES ('39', '6', '20', '1', '149081021720');

-- ----------------------------
-- Table structure for User
-- ----------------------------
DROP TABLE IF EXISTS `User`;
CREATE TABLE `User` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `first_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `salt` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `profile_img` varchar(255) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of User
-- ----------------------------
INSERT INTO `User` VALUES ('16', 'zjh', 'ed0bf6f58171dfdca137498e07dd6dff', 'Jiehua', 'Zeng', '123@qq.com', 'zjh7e6777f', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('17', 'Jeanie', '089f6245b6a9a0eae8352279dd12c6a2', 'Jeanie', 'Lerche Davis', '123@qq.com', 'Jeanie172e3507', 'F', null);
INSERT INTO `User` VALUES ('18', 'Andry', '65de73426d4e642cbfd7400900a6fa8b', 'Andry', 'Raien', '123@qq.com', 'Andry7228add8', 'M', 'images/users/avatar1.jpg');
INSERT INTO `User` VALUES ('19', 'Irene', 'bcf7b550978996b45d1e624710fbb9f1', 'Bingyun', 'Dai', 'lekuyu715@gmail.com', 'Irene3f70571f', 'F', 'images/users/twitter.png');
INSERT INTO `User` VALUES ('20', 'YIZI', '890e3211ee13b56b2e2b42bc65d5dbd7', 'YIZI', 'WANG', 'wangyizi2016@163.com', 'YIZI3b1bb921', 'F', null);
INSERT INTO `User` VALUES ('21', 'Kathleen', 'ac4e16797b08a81e3d1abfe80ed440aa', 'Kathleen', 'M. Zelman', '123@qq.com', 'Kathleen13852732', 'M', null);
INSERT INTO `User` VALUES ('22', 'Thomas', 'cef44d1c639dc23bd11320948250cfde', 'Thomas', 'Smith', '123@qq.com', 'Thomas275c8a42', 'M', 'images/users/avatar3.jpg');
INSERT INTO `User` VALUES ('23', 'Denis', '2c3de564a0801637213f9edf9be2494b', 'Denis', 'Tripod', '123@qq.com', 'Denis46d27a20', 'F', null);
INSERT INTO `User` VALUES ('24', 'Camille', 'ada432cec1ef71f5fb7fdaad1eb98b48', 'Camille', 'Noe PagÃ¡n', '123@qq.com', 'Camille44d3a023', 'F', null);
INSERT INTO `User` VALUES ('25', 'Sago', '6710dc41c2dc452cefd0eecbd39a520f', 'Sago', 'Kaka', '123@qq.com', 'Sago7701817e', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('26', 'Kara', 'fdde482ba4652e85a41d904f5fdfa70b', 'Kara Mayer', 'Robinson', '123@qq.com', 'Kara164088ef', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('27', 'Brenda', '1721b4a8cfebb3e79abe321b8f4a8e62', 'Brenda', 'Goodman', '123@qq.com', 'Brenda4d888aae', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('28', 'Nancy ', '9bedc2c679ed821d4c4d18cc0c2956a9', 'Nancy ', 'Fitzgerald', '123@qq.com', 'Nancy 15ca6019', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('29', 'Lisa', 'ce10c8bd42775308666c180d3d76cebd', 'Lisa', 'Marshall', '123@qq.com', 'Lisa3b0c33a8', 'F', 'images/users/no-avatar.jpg');
INSERT INTO `User` VALUES ('30', 'Gina', '13e7a575993e0f4a4375e06e93029840', 'Gina', 'Shaw', '123@qq.com', 'Gina48169633', 'F', 'images/users/no-avatar.jpg');
