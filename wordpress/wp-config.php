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
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ';$0H:aS>,IwAgH||5ALjvjsja&04vRUJaS_X6!6;O.H9U`7C]y _y04@KMr%R1&3' );
define( 'SECURE_AUTH_KEY',  'W$*UVCgOq?E^p`#zDmxF_Uy(Wu=)hVT*D_zmk!HHwgg8?;HWw:YhD_6oTn/j>8Uj' );
define( 'LOGGED_IN_KEY',    'taB0m38c}f_-IkShykd*,.k=(Exl1&u}+Qf)i!EF|yo-S~FGm0J3ylj]#S<lsA+I' );
define( 'NONCE_KEY',        '^mB_<*aLAxf~[4fzP|jLdAdU+|HbuQ;D79s;Tsf)i>uD,a_/p,H-Z[|xRMcfHuf+' );
define( 'AUTH_SALT',        '<zZ]1lE`:2-3+ymy53p[FX)(Kt_)d7GW`rHZa^:%7qNwz`tve?,LuFrq$+4C(aaE' );
define( 'SECURE_AUTH_SALT', '_3{dvUAH(b2$T28Rp$F1ck|s/)]6T>F2.-O(ov.QWz{7(TkJ}QPh1iYjh_lD2y=A' );
define( 'LOGGED_IN_SALT',   ';|n),g`aZV&,ff..ZbiN%rXEl,.k^oN[P)?g+DI9}2qB3Po4jEee?@7Mwv#W>;Xq' );
define( 'NONCE_SALT',       '`Y1[<>?WeOscZ=uhuwaNVcV>:}-$V4Xp,&dKeH]=>LBF)0l[;JG6/t(Xih5HA<*D' );

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

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
