/*Funica Vasile*/

create database vivaio;
use vivaio;


create table categorie(
	pk_categoria int not null auto_increment,
	nome varchar(30),
	primary key (pk_categoria)
	)engine=innoDB;

insert into categorie(nome)
	values("Alberi altofusto"),
			("Alberi da frutta"),
			("Fiori da esterno"),
			("Orto"),
			("Piante aromatiche"),
			("Piante da interno"),
			("Rose");
			
select * from categorie;
drop table categorie;

create table piante(
	pk_pianta int not null auto_increment,
	nome varchar(30),
	immagine varchar(50),
	cod_cat int,
	primary key (pk_pianta),
	foreign key (cod_cat) references categorie(pk_categoria)
	)engine=innoDB;
	
drop table piante;

insert into piante(nome, immagine, cod_cat)
	values("Abete","abete.jpg",'1'),
			("Acero","acero.jpg",'1'),
			("Betulla","betulla.jpg",'1'),
			("Cipresso","cipresso.jpg",'1'),
			("Leccio","leccio.jpg",'1'),
			("Olmo","olmo.jpg",'1'),
			("Pioppo","pioppo.jpg",'1'),
			("Quercia","quercia.jpeg",'1'),
			("Salice","salice.jpg",'1'),
			("Tiglio","tiglio.jpg",'1'),
			("Albicocco","albicocco.jpg",'2'),
			("Ananasso","ananasso.jpg",'2'),
			("Banano","banano.jpg",'2'),
			("Ciliegio","ciliegio.jpg",'2'),
			("Fico","fico.jpg",'2'),
			("Limone","limone.jpg",'2'),
			("Mandarino","mandarino.jpg",'2'),
			("Melo","melo.jpg",'2'),
			("Pero","pero.jpg",'2'),
			("Pesco","pesco.jpg",'2'),
			("Campanelle","campanelle.jpg",'3'),
			("Erbatrinita","erbatrinita.jpg",'3'),
			("Fiordaliso","fiordaliso.jpg",'3'),
			("Frangipane","frangipane.jpg",'3'),
			("Gazania","gazania.jpg",'3'),
			("Giacinto","giacinto.jpg",'3'),
			("Narciso","narciso.jpg",'3'),
			("Ortensia","ortensia.jpg",'3'),
			("Passiflora","passiflora.jpg",'3'),
			("Peonia","peonia.jpg",'3'),
			("Tulipano","tulipano.jpg",'3'),
			("Viola","viola.jpg",'3'),
			("Broccolo","broccolo.jpg",'4'),
			("Carote","carote.jpg",'4'),
			("Fagioli","fagioli.jpg",'4'),
			("Melanzana","melanzana.jpg",'4'),
			("Patata","patata.jpg",'4'),
			("Peperoncino","peperoncino.jpg",'4'),
			("Peperoni","peperoni.jpg",'4'),
			("Pomodoro","pomodoro.jpg",'4'),
			("Spinaci","spinaci.jpg",'4'),
			("Zucca","Zucca.jpg",'4'),
			("Zucchine","zucchine.jpg",'4'),
			("Aglio","aglio.jpg",'5'),
			("Basilico","basilico.jpg",'5'),
			("Coriandolo","coriandolo.jpg",'5'),
			("Finocchio","finocchio.jpg",'5'),
			("Lavanda","lavanda.jpg",'5'),
			("Menta","menta.jpg",'5'),
			("Origano","origano.jpg",'5'),
			("Prezzemolo","prezzemolo.jpg",'5'),
			("Rosmarino","rosmarino.jpg",'5'),
			("Salvia","salvia.jpg",'5'),
			("Timo","timo.jpg",'5'),
			("Zenzero","zenzero.jpg",'5'),
			("Anturio","anturio.jpg",'6'),
			("Calancola","calancola.jpg",'6'),
			("Clivia","clivia.jpg",'6'),
			("Dieffenbachia","dieffenbachia.jpg",'6'),
			("Howea","Howea.jpg",'6'),
			("Pothos","pothos.jpg",'6'),
			("Spatifillo","spatifillo.jpg",'6'),
			("Rosa","rosa.jpg",'7'),
			("Rosa alpina","rosaalpina.jpg",'7'),
			("Rosa barbra","rosabarbra.jpg",'7'),
			("Rosa barni","rosabarni.jpg",'7'),
			("Rosa belle epoque","rosabelleepoque.jpg",'7'),
			("Rosa damascena","rosadamascena.jpg",'7'),
			("Rosa france","rosafrance.jpg",'7'),
			("Rosa gialla","rosagialla.jpg",'7'),
			("Rosa meilland","rosameilland.jpg",'7'),
			("Rosa notturno","rosanotturno.jpg",'7'),
			("Rosa profumo di donna","rosaprofumodidonna.jpg",'7'),
			("Rosa viola","rosaviola.jpg",'7');
			
			
			
	
	
	
	
	
	
	
	
	