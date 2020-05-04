CREATE TABLE `witcher`.`characters` ( 
                                `id` INT NOT NULL AUTO_INCREMENT, 
                                `name` VARCHAR(255) NOT NULL, 
                                `description` TEXT NOT NULL, 
                                `race_id` INT NOT NULL,
                                `char_image` VARCHAR(255) NOT NULL,
                                PRIMARY KEY (`id`));

                                
CREATE TABLE `witcher`.`races` ( 
                                `raceid` INT NOT NULL AUTO_INCREMENT, 
                                `racename` VARCHAR(255) NOT NULL, 
                                `raceimages` VARCHAR(255) NOT NULL,
                                PRIMARY KEY (`raceid`));

CREATE TABLE `witcher`.`users` ( 
                                `userid` INT NOT NULL AUTO_INCREMENT, 
                                `name` VARCHAR(255) NOT NULL, 
                                `email` VARCHAR(255) NOT NULL, 
                                `username` VARCHAR(255) NOT NULL, 
                                `password` VARCHAR(255) NOT NULL, 
                                PRIMARY KEY (`userid`)); 

INSERT INTO `witcher`.`characters` (`name`, `description`, `char_image`, `race_id`) VALUES
('Ríviai Geralt', 'Ríviai Geralt (lengyelül: Geralt z Rivii), avagy Gwynnbleid (ezt a nevet a driádoktól kapta, mely az Ősi Nyelven azt jelenti: Fehér Farkas) egy Vaják és főszereplője Andrzej Sapkowski könyvsorozatának és azok adaptációinak (ide értve a \"The Witcher\" PC játékot is.) Van, ahol a Blavikeni mészárosként vált hírhedté.\r\n\r\nNevével ellentétben Geralt valójában nem ríviai. De Vesemir mester arra buzdította az ifjú, leendő Vajákokat, hogy találjanak ki maguknak egy \"vezetéknevet\", melytől az megbízhatóbbnak hangzik. Első választását - Geralt Roger Eric du Haute-Bellegarde - Vesemir elutasította, mert túl mesterkéltnek és ostobának hatott.', 'Geralt.png', 3),
('Vengerbergi Yennefer', 'Yennefer (Vengerbergi Yennefer) – hosszú fekete hajú, jellegzetes orgona és egres illatú varázslónő. Született Belleteynben, 1173. Riviai Geralt igaz szerelme. A nő távolságot tart a vaják között – de kötődnek egymáshoz. Az utolsó kívánság kötetben együtt voltak, A végzet karjában részletesebben ír kettőjükről. A harmadik kötetben Ciri anyáskodó szerepét tölti be.', 'Yennefer.png', 2),
('Ciri', 'Cirilla Fiona Elen Riannon vagy becenevén Ciri (Tündéktől kapott nevén, Zireael) 1253[2] körül  született Pavetta és Emhyr var Emreis lányaként, Calanthe unokájaként. Hercegnői nevelést kapott mindaddig míg 1263-ban Cintrát meg nem támadta Nilfgaard. Ezekután találkozott a hírhedt vajákkal, Ríviai Geraltal aki befogadta.', 'Ciri.png', 1),
('Triss Merigold', 'A Maribor-i Triss Merigold egy varázslónő, akit a „domb tizenegyedik áldozatának” hívnak, mivel tévesen úgy hitte, hogy a Soddeni Csata alatt megölték. Yennefer és a Vaják, Geralt barátja, az utóbbiba boldogtalanul szerelmes. Egy ideig ő vigyázott Cirire Kaer Morhenben, akinek Triss olyan, mint egy idősebb testvér. A varázslónő közbelépésének volt köszönhető, hogy Cirinek gondatlanságból nem adtak ártalmas hormonokat, melyek negatívan hathattak volna nőiességére. A varázslónők szövetségének egyik tagja, Fencart és Foltest király fejedelmi tanácsosa, Keira Metz mellett.\r\n\r\nTriss a gyönyörű vörösesbarna hajáról ismert. Egy képzett gyógyító, aki sok mágikus italt hordoz magával, de ezeket soha nem használja önmagán, mivel allergiás a mágiára.\r\n\r\nA regény végén (7.Könyv - A Tó Úrnője) Geralt után áhítozik - Arcát céklavörös pír borítja, jobbra-balra ingatja a csípőjét a nyeregben -, de Yennefer átlát a szándékán és egy heves cicaharc bontakozik ki a kettő között. Később a Ríviai-pogrom kezdetekor Amikor Geralt halálosan megsebesült, Ciri életvonalán (a bal kezén) vérezni kezd. Mindhárman odarohannak, Yennefer-t is Halálosan megsebezik, majd Ciri egy csónakra téve mindkettőt egy másik világba viszi, Triss viszont tétlenül nézte végig a szerelmesek halálát.', 'Triss.png', 1);

INSERT INTO `witcher`.`races` (`racename`, `raceimages`) VALUES
('Ember', 'humans.jpg'),
('Tünde', 'elves.jpg'),
('Mutáns', 'mutants.jpg'),
('Törpe', 'dwarfs.jpg');
