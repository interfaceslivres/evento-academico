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
define('DB_NAME', 'eventoacademico');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'eventoacademico');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'eventoacademico');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '[0UbM#i$#-chBR>$g*H%8Tq!m0d38%>Uw1C8xH^WB<p7K&.6qW<q]~/} 0#`?qHw');
define('SECURE_AUTH_KEY',  'VJ;wx1Q|s6w2-q_(wx~v+x^A!3.LzuU7DvibS`#J^7op#2bis/u,fim/ALJTHQh>');
define('LOGGED_IN_KEY',    '_*%h=GSZO2pbj^dG(h,d%TSc;iN*z8wG`!R^8r,Xd=T,&*!/ChBZGQH9k;*j0;Sp');
define('NONCE_KEY',        '~R1FmZ$0viFJ6_8WHh_8!~)N:_Jz8f7b3MfrD?,ds:Sw6fcfa;:i?-A)D<je186L');
define('AUTH_SALT',        'Az.e2?9O~n}G7gDB*^:xlv+m0P^>a8}1$%|)qdG</,%]B>P9LrH>ufZ&^7otX?Y%');
define('SECURE_AUTH_SALT', '<9qFlC$Ls*4{{*<+1Z+aN1^Yug73.$iy#*.otOr((lmPJ,a>8?E.^t76z$@3xR,Z');
define('LOGGED_IN_SALT',   '!:%Xi<>#}Fi*wthtAJ.d03$1R-<4rU.s&RwI@k-;b[At%F(-.]?aCZ]<GY4;:FJ9');
define('NONCE_SALT',       'X2JqP3e7GN9Y#9X32Zl~eDJdXm8E~l@}E)&fYEO&7F21f_wn8xfD jVdC&y r;i9');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

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
