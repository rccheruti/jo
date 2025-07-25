CREATE DATABASE IF NOT EXISTS codeigniter_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE codeigniter_db;
CREATE TABLE IF NOT EXISTS usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  telefone VARCHAR(20),
  celular VARCHAR(20) NOT NULL,
  data_nascimento DATE NOT NULL,
  estado_civil VARCHAR(20) NOT NULL,
  cpf VARCHAR(14) NOT NULL,
  rg VARCHAR(20),
  data_emissao DATE,
  observacoes TEXT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  softdelete DATETIME DEFAULT NULL,
);
INSERT INTO usuarios (
    nome,
    email,
    telefone,
    celular,
    data_nascimento,
    estado_civil,
    cpf,
    rg,
    data_emissao,
    observacoes,
    created_at,
    softdelete
  )
VALUES (
    'Admin',
    'admin@admin',
    '123456789',
    '987654321',
    '1990-01-01',
    'Solteiro',
    '12345678901',
    '123456789',
    '2020-01-01',
    'Admin user',
    NOW(),
    NULL
  );