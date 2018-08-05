CREATE PROCEDURE PRC_INSERT_USUARIOS(
    p_desc_login VARCHAR(64)
    , p_desc_senha VARCHAR(256)
)
BEGIN 
    INSERT INTO tb_usuarios (desc_login, desc_senha) VALUES (p_desc_login, p_desc_senha);
    
    SELECT * from tb_usuarios WHERE id_usuario = LAST_INSERT_ID(); 

END$