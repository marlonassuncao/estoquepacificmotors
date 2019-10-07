<?php
define('WP_CACHE', false); // Added by WP Rocket
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'estoquepacificmotors');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'Hiexoez41994_@');

/** Nome do host do MySQL */
define('DB_HOST', '');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hfR0|qGoD_)0wDy;mU|uW0LC|m.fjX28|-+Dk|q[73m/!2F7LN.dNA)V7*~#7B+{');
define('SECURE_AUTH_KEY',  'xjx?LPTaoo- ,^P|S- EEBt4|Qyk)g2.[hm5-9^ATtef)5FrBO;(;f36mmf2Oj8i');
define('LOGGED_IN_KEY',    '{bg-7kQ|H:v1wMi[?Oz%#TX UJpH&iY;+ImCb7b)PBB[wnr84{@7t31n+Nr*=}0p');
define('NONCE_KEY',        ']*lgQ?+z1r%9]rEL{+3d-4A3UODM>^T?@ ,]IP_t ~R.l(jjhjL67h>Y,Yu>JoUa');
define('AUTH_SALT',        ']^<9Yp;|ER7VOEoZ-j}P|X|oi|1 vITqH%0TtY+?F*7ZSv%l=s|oaX=yCsVRNqlW');
define('SECURE_AUTH_SALT', 'D&r37Z73[H5*nIC^qQ9t3-D QUg5! Q2MwJLBC2g}q%]px+qn$7.z-U }.gazwvE');
define('LOGGED_IN_SALT',   'g]g|=E+;>g$g1i1`yo}E4)>K40cp50>0eD]BxxC0d~w~+/}F3EN2BeE8Wz}YRTUa');
define('NONCE_SALT',       '+cM;=.)*[!H~[4]dG0<4sn[KuqqqA=b-J*U=enNi0en5)}o(g|#Q}lY7esa.u=tJ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
