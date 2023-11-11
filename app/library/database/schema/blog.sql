-- Criar o banco de dados
CREATE DATABASE IF NOT EXISTS blog;
USE blog;

-- Criar a tabela 'categories'
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Criar a tabela 'users'
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(255) NOT NULL,
    lastName VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Criar a tabela 'posts'
CREATE TABLE IF NOT EXISTS posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    category_id INT,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    visits INT,
    image mediumtext,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);

-- 10 inserts para tabela users
INSERT INTO users (firstName, lastName, email) VALUES
    ('Alice', 'Smith', 'alice.smith@example.com'),
    ('Bob', 'Johnson', 'bob.johnson@example.com'),
    ('Charlie', 'Williams', 'charlie.williams@example.com'),
    ('David', 'Brown', 'david.brown@example.com'),
    ('Emma', 'Jones', 'emma.jones@example.com'),
    ('Frank', 'Taylor', 'frank.taylor@example.com'),
    ('Grace', 'Clark', 'grace.clark@example.com'),
    ('Henry', 'White', 'henry.white@example.com'),
    ('Ivy', 'Anderson', 'ivy.anderson@example.com'),
    ('Jack', 'Thomas', 'jack.thomas@example.com');

-- 10 inserts para tabela categories
INSERT INTO categories (name) VALUES
    ('Análise de Desempenho'),
    ('Análise Técnica'),
    ('Estatísticas de Jogadores'),
    ('Táticas de Jogo'),
    ('Mercado de Transferências'),
    ('Lesões e Recuperação'),
    ('Gestão de Clubes'),
    ('História do Futebol'),
    ('Competições Internacionais'),
    ('Inovações Tecnológicas no Futebol');

-- 50 inserts para tabela posts
INSERT INTO posts (user_id, category_id, title, slug, visits, image, description) VALUES
    (1, 1, 'Como Analisar o Desempenho de um Jogador', 'analise-desempenho-jogador', 150, 'image1.jpg', 'Neste artigo, exploramos as melhores práticas para analisar o desempenho de jogadores de futebol.'),
    (2, 2, 'A Importância da Tática no Futebol Moderno', 'importancia-tatica-futebol', 200, 'image2.jpg', 'Discutimos como as táticas influenciam o jogo e o que os técnicos podem fazer para obter vantagem tática.'),
    (3, 3, 'Estatísticas que Todo Torcedor Deveria Conhecer', 'estatisticas-torcedor', 120, 'image3.jpg', 'Apresentamos algumas estatísticas-chave que podem fornecer insights valiosos sobre o desempenho dos jogadores.'),
    (10, 10, 'O Futuro do Futebol: Inovações Tecnológicas', 'futuro-futebol-inovacoes', 80, 'image50.jpg', 'Exploramos as últimas inovações tecnológicas que estão moldando o futuro do futebol.'),
	(4, 4, 'Estratégias de Jogo: Ataque vs. Defesa', 'estrategias-jogo-ataque-defesa', 90, 'image4.jpg', 'Exploramos as diferentes estratégias de jogo, focando nas abordagens ofensivas e defensivas.'),
    (5, 5, 'Negociações no Mercado de Transferências', 'negociacoes-mercado-transferencias', 110, 'image5.jpg', 'Um olhar detalhado sobre as negociações que ocorrem durante o mercado de transferências no futebol.'),
    (6, 6, 'Prevenção e Recuperação de Lesões em Jogadores', 'prevencao-recuperacao-lesoes-jogadores', 75, 'image6.jpg', 'Dicas e práticas recomendadas para prevenir lesões e acelerar a recuperação de jogadores de futebol.'),
    (7, 7, 'Os Desafios da Gestão de Clubes de Futebol', 'desafios-gestao-clubes-futebol', 130, 'image7.jpg', 'Discutimos os desafios enfrentados pelos gestores de clubes, desde aspectos financeiros até gestão de equipes.'),
    (8, 8, 'Momentos Históricos: Grandes Partidas de Futebol', 'momentos-historicos-grandes-partidas-futebol', 180, 'image8.jpg', 'Relembramos algumas das maiores partidas de futebol da história e seus momentos decisivos.'),
    (9, 9, 'A Magia das Competições Internacionais', 'magia-competicoes-internacionais', 160, 'image9.jpg', 'Uma visão abrangente sobre as competições internacionais de futebol e sua importância no cenário global.'),
    (10, 10, 'Como a Inteligência Artificial Está Transformando o Futebol', 'inteligencia-artificial-transformacao-futebol', 100, 'image10.jpg', 'Exploramos como a inteligência artificial está sendo usada para melhorar o desempenho e a análise no futebol.'),
    (1, 1, 'Evolução Tática: Mudanças no Jogo ao Longo do Tempo', 'evolucao-tatica-mudancas-jogo-tempo', 120, 'image11.jpg', 'Uma análise da evolução tática do futebol e como as estratégias de jogo mudaram ao longo dos anos.'),
    (2, 2, 'Os Melhores Jogadores de Futebol de Todos os Tempos', 'melhores-jogadores-futebol-todos-tempos', 200, 'image12.jpg', 'Uma lista dos jogadores de futebol mais excepcionais que deixaram sua marca na história do esporte.'),
    (3, 3, 'A Ciência por Trás das Estatísticas no Futebol', 'ciencia-estatisticas-futebol', 150, 'image13.jpg', 'Exploramos como a análise estatística está transformando a compreensão do desempenho no futebol.'),
    (4, 4, 'Estratégias de Marcação: Pressão Alta vs. Linha Baixa', 'estrategias-marcacao-pressao-alta-linha-baixa', 120, 'image14.jpg', 'Comparamos as estratégias de marcação, incluindo a pressão alta e a linha baixa, e seu impacto no jogo.'),
    (5, 5, 'Negócios e Finanças no Futebol Profissional', 'negocios-financas-futebol-profissional', 90, 'image15.jpg', 'Uma análise dos aspectos financeiros e de negócios envolvidos no futebol profissional.'),
    (6, 6, 'Reabilitação Física: Desafios e Inovações', 'reabilitacao-fisica-desafios-inovacoes', 110, 'image16.jpg', 'Exploramos os desafios enfrentados na reabilitação física de jogadores de futebol e as inovações no campo.'),
    (7, 7, 'Liderança no Esporte: O Papel dos Capitães', 'lideranca-esporte-papel-capitaes', 80, 'image17.jpg', 'Discutimos o papel crucial dos capitães no campo e como a liderança influencia o desempenho da equipe.'),
    (8, 8, 'Grandes Jogos: Duelos Épicos e Viradas Históricas', 'grandes-jogos-duelos-epicos-viradas-historicas', 180, 'image18.jpg', 'Relembramos alguns dos maiores jogos de futebol, destacando duelos épicos e viradas históricas.'),
    (9, 9, 'A Paixão dos Torcedores: O Coração do Futebol', 'paixao-torcedores-coracao-futebol', 130, 'image19.jpg', 'Exploramos a paixão dos torcedores pelo futebol e como sua presença impacta o ambiente nos estádios.'),
    (10, 10, 'Avanços Tecnológicos em Equipamentos de Futebol', 'avancos-tecnologicos-equipamentos-futebol', 160, 'image20.jpg', 'Uma visão sobre os avanços tecnológicos nos equipamentos de futebol, desde chuteiras até uniformes.'),
    (1, 1, 'O Papel dos Analistas de Dados no Futebol Moderno', 'papel-analistas-dados-futebol-moderno', 100, 'image21.jpg', 'Exploramos como os analistas de dados contribuem para o sucesso das equipes de futebol por meio da análise estatística.'),
    (2, 2, 'Evolução da Arbitragem: VAR e Novas Tecnologias', 'evolucao-arbitragem-var-novas-tecnologias', 200, 'image22.jpg', 'Uma análise da evolução da arbitragem no futebol, destacando a introdução do VAR e outras tecnologias.'),
    (3, 3, 'A Importância do Departamento Médico nos Clubes', 'importancia-departamento-medico-clubes', 120, 'image23.jpg', 'Discutimos como o departamento médico desempenha um papel crucial na saúde e no desempenho dos jogadores.'),
    (4, 4, 'Estratégias de Comunicação em Equipes de Futebol', 'estrategias-comunicacao-equipes-futebol', 150, 'image24.jpg', 'Como a comunicação eficaz é fundamental para o sucesso de uma equipe de futebol, dentro e fora do campo.'),
    (5, 5, 'A Magia da Copa do Mundo: Histórias Memoráveis', 'magia-copa-do-mundo-historias-memoraveis', 90, 'image25.jpg', 'Relembramos algumas das histórias mais memoráveis e emocionantes da história da Copa do Mundo de Futebol.'),
    (6, 6, 'Desafios Ambientais no Futebol Profissional', 'desafios-ambientais-futebol-profissional', 110, 'image26.jpg', 'Uma reflexão sobre os desafios ambientais enfrentados pelo futebol profissional e iniciativas sustentáveis no esporte.'),
    (7, 7, 'O Legado de Grandes Treinadores no Futebol', 'legado-grandes-treinadores-futebol', 80, 'image27.jpg', 'Exploramos o impacto duradouro de treinadores lendários no mundo do futebol.'),
    (8, 8, 'O Futuro das Competições de Clubes na Europa', 'futuro-competicoes-clubes-europa', 180, 'image28.jpg', 'Perspectivas sobre o futuro das competições de clubes na Europa e as mudanças planejadas.'),
    (9, 9, 'Jovens Talentos: Prospecção e Desenvolvimento', 'jovens-talentos-prospeccao-desenvolvimento', 130, 'image29.jpg', 'Como os clubes de futebol identificam e desenvolvem jovens talentos para garantir um futuro promissor.'),
    (10, 10, 'Futebol e Cultura: A Influência Recíproca', 'futebol-cultura-influencia-reciproca', 160, 'image30.jpg', 'Exploramos a relação entre o futebol e a cultura, destacando como ambos influenciam um ao outro.');