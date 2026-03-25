--Script para criar o banco de dados e a tabela de pontos
CREATE DATABASE IR NOT EXISTS sistema_ponto;
USE sistema_ponto;

CREATE TABLE IF NOTE EXISTS pontos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  funcionario_nome VARCHAR(100) NOT NULL,
  tipo_ponto ENUM('Entrada', 'Saída') NOT NULL,
  data_hora DATETIME DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
