USE hudsonthom;

DROP TABLE IF EXISTS person;

CREATE TABLE person (
	LoginID varchar(10) NOT NULL,
    FirstName varchar(50) NOT NULL,
    LastName varchar(50) NOT NULL,
    picUrl varchar(50),
    Bio varchar(255) NOT NULL,
    PRIMARY KEY (LoginID)
);

INSERT INTO person VALUES ( 'th1', 'tom', 'hudson', null, 'tom is a good coder'),
( 'cr2', 'chris', 'remmen', null, 'chris is a good basketball player'),
( 'sh3', 'shawna', 'herman', null , 'shawna is good at soccer'),
( 'ws4', 'wesley', 'shurman', null, 'wesley skateboards'),
( 'ox5', 'oliver', 'xia', null, 'oliver knows how to cook'),
( 'rq6', 'ryan', 'qeriy', null, 'ryan can play the guitar'),
( 'eg7', 'esther', 'guchimi', null, 'esther can  read binary'),
( 'yv8', 'yenny', 'verigamondo', null, 'yenny is nicknamed kenny'),
( 'ui9', 'uguhut', 'ickypants', null, 'uguhut is icky'),
( 'bp10', 'brian', 'patterson', null, 'brian can crack a whip');