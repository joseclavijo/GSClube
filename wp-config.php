<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'gsclube');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l|G[1OvcEh`|3of@/wM%*#)gJ)3Ka;Pl}19VT/3#lCQw[Tj+vS-mrL49v03nAyon');
define('SECURE_AUTH_KEY',  'EL<_$R/mU K-u2=?[@RP8Cq+i7}-icY-|m[0w20Fp9X;l2_%Q.:iU}Xm|^,Sc}vp');
define('LOGGED_IN_KEY',    '|%g$H96+S8+LjwE_nr2z1sE69H4_rBZc`f|XIUzlUlZ1F!k_z/ZwgPY1dmw)aQIA');
define('NONCE_KEY',        'NS`_s*/a!hTL@FM@uUU|QcIb&7W4x-###=8nZ5iN`x8!(g5MY(k0B0MJh3iEA-P=');
define('AUTH_SALT',        '$}qU@tXd2$Kdd+ s2!~a=v15>TCbo+Q%_o$aJ,+x9~H+7&]B[_$>RbY8V_gG5u-_');
define('SECURE_AUTH_SALT', '=-~v1YE1DE^&FCH01+Co<A=a$PE(/m%u<`!QI2z4O/rf1d<4-T@5-B&6s5Ut_Nh>');
define('LOGGED_IN_SALT',   '6JJkU&8@heCtP1W?UUYTOTsoLXrsZUenZCj>UH[-ZJ fc{h(j1TA;1uW-HYwHklp');
define('NONCE_SALT',       '9aZW])A*C#:rgCe?5rI-eU;-C_:WP[&6LCoETA`%N`$gela(FddO,nIHH3<z14+r');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
