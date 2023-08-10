<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'jif' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'root' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'iUwxkaXbar$:i;QYb!x ]L#t4u`G^>GK I&.nd9Xnh5T<L,(aO<Qo%+tWfOXV!Vg' );
define( 'SECURE_AUTH_KEY',  'E#9,`D_fRbUTi/P$ajW>=r7?^O(~B]` An< $/<(5j>T^h(<qvz+61NUyHVK$q;]' );
define( 'LOGGED_IN_KEY',    '_o7se0Ycp88u?T_a+HF/D}819iuH,Tw`geuVrX>B`S/HkacYFM,PD2rj}NPD,+9%' );
define( 'NONCE_KEY',        'Ktfr6X4 uokgmRNygX`GS g>WyHrvEP|sdexmHR)0gU[D,AFhvvs7b^.UG-f*`tG' );
define( 'AUTH_SALT',        '0W61$)K2gDR%Kz?Y2~9J%Apt`_yvLsGBd@TD#o0T&o-d>s@_BA`CT]s#tNhN~57%' );
define( 'SECURE_AUTH_SALT', 'a 9$+*83+u&~NsJA2}B0]p}4yRn%B{45[6Qg7o!7iBjr.x`$5I(;/nHCpcfQa]<D' );
define( 'LOGGED_IN_SALT',   '5u3>/e)-f$r_Q$t%aOm1_|*6!Ps}9H=#NHFoV5[:8Wn2F`_Y$>gdSv a_n&X>SJ:' );
define( 'NONCE_SALT',       ':L`T7cv$s5#|:({)|+o+gf%)FjP^B&q !awELLUF6kDW5v#_0Tb 2:F{2hE15I-K' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
