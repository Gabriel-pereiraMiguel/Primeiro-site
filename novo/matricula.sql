


CREATE TABLE Alunos (
  ID INT PRIMARY KEY,
  Nome VARCHAR(50),
  DataNascimento DATE,
  Sexo CHAR(1),
  Serie INT,
  Turma VARCHAR(10)
);

INSERT INTO Alunos (ID, Nome, DataNascimento, Sexo, Serie, Turma)
VALUES 
  (1, 'João Silva', '2005-05-01', 'M', 8, 'A'),
  (2, 'Maria Souza', '2006-08-12', 'F', 7, 'B'),
  (3, 'Pedro Santos', '2007-02-23', 'M', 6, 'C');