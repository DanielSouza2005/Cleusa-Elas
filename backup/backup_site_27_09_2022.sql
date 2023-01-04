set foreign_key_checks=0;


#
# //Criação da Tabela : tb_contato
#

CREATE TABLE `tb_contato` (
  `con_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `con_endereco` varchar(200) NOT NULL,
  `con_enderecoEN` varchar(200) NOT NULL,
  `con_telefone` varchar(14) NOT NULL,
  `con_email` varchar(100) NOT NULL,
  PRIMARY KEY (`con_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_contato VALUES('1', 'Nosso endereço fica em R. Tupinambás, 115 - Jardim São Francisco, Santa Bárbara d\'Oeste - SP, 13457-027', 'We are in R. Tupinambás, 115 - Jardim São Francisco, Santa Bárbara d\'Oeste - SP, 13457-027', '(19) 3455-3155', 'cleusaeelas@gmail.com')
;

#
# //Criação da Tabela : tb_cor
#

CREATE TABLE `tb_cor` (
  `cor_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cor_principal` varchar(10) NOT NULL,
  `cor_titulos` varchar(10) NOT NULL,
  `cor_apoio` varchar(10) NOT NULL,
  PRIMARY KEY (`cor_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_cor VALUES('1', '#F8A1E0', '#E63C60', '#FE2E8F')
;

#
# //Criação da Tabela : tb_coraux
#

CREATE TABLE `tb_coraux` (
  `cor_codigo` int(11) NOT NULL,
  `cor_principal` varchar(10) NOT NULL,
  `cor_titulos` varchar(10) NOT NULL,
  `cor_apoio` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_coraux VALUES('1', '#F8A1E0', '#E63C60', '#FE2E8F')
;

#
# //Criação da Tabela : tb_galeria
#

CREATE TABLE `tb_galeria` (
  `gal_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `gal_servico` varchar(50) NOT NULL,
  `gal_especificacao` varchar(50) NOT NULL,
  `gal_servicoEN` varchar(50) NOT NULL,
  `gal_especificacaoEN` varchar(50) NOT NULL,
  `gal_foto` varchar(100) NOT NULL,
  PRIMARY KEY (`gal_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_galeria VALUES('1', 'Estetica', 'Barba', 'Beauty', 'Beard', 'fotos/1662929244.jpg')
,('2', 'BEAUTY', 'HAIRCUT', 'BEAUTY', 'HAIRCUT', 'fotos/1662860872.jpg')
,('3', 'BEAUTY', 'HAIRSTYLIST', 'BEAUTY', 'HAIRSTYLIST', 'fotos/1662860878.jpg')
,('4', 'BEAUTY', 'HAIRCUT', 'BEAUTY', 'HAIRCUT', 'fotos/1662860885.jpg')
,('5', 'BEAUTY', 'MAKEUP', 'BEAUTY', 'MAKEUP', 'fotos/1662860891.jpg')
,('6', 'FASHION', 'MODEL', 'FASHION', 'MODEL', 'fotos/1663206053.jpg')
,('7', 'BEAUTY', 'MAKEUP', 'BEAUTY', 'MAKEUP', 'fotos/1662860904.jpg')
,('8', 'BEAUTY', 'MAKEUP', 'BEAUTY', 'MAKEUP', 'fotos/1662861067.jpg')
;

#
# //Criação da Tabela : tb_galgeral
#

CREATE TABLE `tb_galgeral` (
  `galG_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `galG_titulo` varchar(80) NOT NULL,
  `galG_descricao` varchar(100) NOT NULL,
  `galG_tituloEN` varchar(80) NOT NULL,
  `galG_descricaoEN` varchar(100) NOT NULL,
  PRIMARY KEY (`galG_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_galgeral VALUES('1', 'Galeria', 'Conheça um pouco mais sobre nosso trabalho!', 'Gallery', 'Know a little more about our work!')
;

#
# //Criação da Tabela : tb_home
#

CREATE TABLE `tb_home` (
  `hom_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `hom_frase` varchar(80) NOT NULL,
  `hom_foto` varchar(100) NOT NULL,
  `hom_fraseEN` varchar(80) NOT NULL,
  PRIMARY KEY (`hom_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_home VALUES('1', 'Seja sua melhor versão!', 'fotos/1662927258.jpg', 'Be your best version!')
;

#
# //Criação da Tabela : tb_icone
#

CREATE TABLE `tb_icone` (
  `ico_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ico_icone` varchar(100) NOT NULL,
  `ico_descricao` varchar(80) NOT NULL,
  PRIMARY KEY (`ico_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_icone VALUES('2', 'fotos/1662693782.png', 'Depiladora')
,('3', 'fotos/1662693803.png', 'Depiladora 2')
,('5', 'fotos/1662694049.png', 'Tesoura')
,('6', 'fotos/1662693678.png', 'Cabelo 2')
,('7', 'fotos/1662693842.png', 'Esmalte')
,('8', 'fotos/1662693870.png', 'Esmalte 2')
,('9', 'fotos/1662693908.png', 'Produtos')
,('10', 'fotos/1662694087.png', 'Xampu')
,('11', 'fotos/1662693721.png', 'Cabelo 3')
,('14', 'fotos/1662602162.png', 'Cabelo')
,('18', 'fotos/1662603646.png', 'Escova')
,('19', 'fotos/1662855654.png', 'Borboleta')
,('20', 'fotos/1662855666.png', 'Espelho')
,('21', 'fotos/1662855678.png', 'Secador')
;

#
# //Criação da Tabela : tb_servgeral
#

CREATE TABLE `tb_servgeral` (
  `serG_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `serG_titulo` varchar(80) NOT NULL,
  `serG_descricao` varchar(100) NOT NULL,
  `serG_tituloEN` varchar(80) NOT NULL,
  `serG_descricaoEN` varchar(100) NOT NULL,
  PRIMARY KEY (`serG_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_servgeral VALUES('1', 'Serviços', 'Os melhores atendimentos na Indústria da Estética!', 'Services', 'The best services in the Aesthetics Industry')
;

#
# //Criação da Tabela : tb_servicos
#

CREATE TABLE `tb_servicos` (
  `ser_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ser_titulo` varchar(30) NOT NULL,
  `ser_descricao` varchar(250) NOT NULL,
  `ser_tituloEN` varchar(30) NOT NULL,
  `ser_descricaoEN` varchar(250) NOT NULL,
  `ico_codigo` int(11) NOT NULL,
  PRIMARY KEY (`ser_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_servicos VALUES('1', 'Cabelo', 'Nossa Profissional é responsável por fazer cortes, penteados, hidratação, coloração e outros procedimentos estéticos.', 'Hairdressing', 'Nossa Profissional é responsável por fazer cortes, penteados, hidratação, coloração e outros procedimentos estéticos.', '11')
,('2', 'Manicure & Pedicure', 'Responsável por atender clientes e prestar tratamento estético das mãos e pés, como corte de unhas, polimento e esmaltagem.', 'Manicure & Pedicure', 'Responsável por atender clientes e prestar tratamento estético das mãos e pés, como corte de unhas, polimento e esmaltagem.', '7')
,('3', 'Depiladora', 'Profissional capacitada por cuidar da saúde depilatoria feminina, utilizamos técnicas específica, produtos e equipamentos adequados e esterilizados para o procedimento.', 'Depilator', 'Profissional capacitada por cuidar da saúde depilatoria feminina, utilizamos técnicas específica, produtos e equipamentos adequados e esterilizados para o procedimento.', '2')
,('4', 'Esteticista', 'Profissional responsável no tratamento e embelezamento corporal, facial e capilar. Entre suas aptidões estão limpeza de pele, hidratação, massagens e aplicação de cosméticos.', 'Beautician', 'Profissional responsável no tratamento e embelezamento corporal, facial e capilar. Entre suas aptidões estão limpeza de pele, hidratação, massagens e aplicação de cosméticos.', '9')
;

#
# //Criação da Tabela : tb_sobre
#

CREATE TABLE `tb_sobre` (
  `sob_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `sob_titulo` varchar(200) NOT NULL,
  `sob_texto1` varchar(200) NOT NULL,
  `sob_texto2` varchar(200) NOT NULL,
  `sob_tituloEN` varchar(200) NOT NULL,
  `sob_texto1EN` varchar(200) NOT NULL,
  `sob_texto2EN` varchar(200) NOT NULL,
  `sob_foto` varchar(100) NOT NULL,
  PRIMARY KEY (`sob_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_sobre VALUES('1', 'Bem-vindo(a) ao nosso salão de beleza!', 'Somos uma empresa que tem como objetivo proporcionar um ambiente acolhedor, tranquilo e agradável ao seu público, onde as clientes recebam o melhor atendimento do mercado na área de cabelo e estética.', 'Nossas profissionais são qualificadas e preocupadas em promover momentos de bem estar e serviços de qualidade, a fim de que nossas clientes possuam uma experiência única em nosso salão.', 'Welcome to our Hair Salon!', 'Somos uma empresa que tem como objetivo proporcionar um ambiente acolhedor, tranquilo e agradável ao seu público, onde as clientes recebam o melhor atendimento do mercado na área de cabelo e estética.', 'Nossas profissionais são qualificadas e preocupadas em promover momentos de bem estar e serviços de qualidade, a fim de que nossas clientes possuam uma experiência única em nosso salão.', 'fotos/1663465211.jpg')
;

#
# //Criação da Tabela : tb_time
#

CREATE TABLE `tb_time` (
  `tim_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `tim_nome` varchar(80) NOT NULL,
  `tim_especialidade` varchar(80) NOT NULL,
  `tim_especialidadeEN` varchar(80) NOT NULL,
  `tim_foto` varchar(100) NOT NULL,
  PRIMARY KEY (`tim_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_time VALUES('2', 'Cleusa', 'Cabeleireira', 'Hairdresser', 'fotos/1662928704.jpg')
,('3', 'Graziela', 'Cabeleireira e Maquiadora', 'Hairdresser & Makeup Artist', 'fotos/1662858064.jpg')
,('4', 'Daniela', 'Manicure e Pedicure', 'Manicure & Pedicure', 'fotos/1662858069.jpg')
,('5', 'Gessica', 'Esteticista', 'Beautician', 'fotos/1662858127.jpg')
;

#
# //Criação da Tabela : tb_timgeral
#

CREATE TABLE `tb_timgeral` (
  `timG_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `timG_titulo` varchar(80) NOT NULL,
  `timG_descricao` varchar(100) NOT NULL,
  `timG_tituloEN` varchar(80) NOT NULL,
  `timG_descricaoEN` varchar(100) NOT NULL,
  PRIMARY KEY (`timG_codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ;

#
# //Dados a serem incluídos na tabela
#

INSERT INTO tb_timgeral VALUES('1', 'Conheça Nosso Time', 'Trabalhamos para que você seja a melhor versão de si mesmo ;)', 'Get to Know Our Team', 'We work to make you the best version of yourself ;)')
;
