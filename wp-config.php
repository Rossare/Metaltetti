<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'lattoneria_metaltetti' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2oW,O2`2E;}s`B-@~E+Xjj_-uv|p9U][$n_e]qe6n%tsp)3nik<TDz$bYl2uvJ7S' );
define( 'SECURE_AUTH_KEY',  'R11?{9Nm&3(_nUXq3r#L~.~0b}O|/5aX/T/~rMz0Q&=LHAAsQ%_H~,6|Y#[T`5rj' );
define( 'LOGGED_IN_KEY',    'r.ks[6Uf)lTA]f6o9J:zSh]q;f]mM6d,.rhahaFOgAjfaQe*,<6&h>=JU^i])!sI' );
define( 'NONCE_KEY',        'AxA]L[x<q5RxaA4~f1uJra-ela[ntbG:b/6<{c8g~V8<a?0Q,:O2RYClS-bfB|}n' );
define( 'AUTH_SALT',        '{u!Q-s};{[MCt!&|NJ^g#.}vgD{unbms6IbNyN`~Bg}u{S%mx[vx$e/+42s]2i3T' );
define( 'SECURE_AUTH_SALT', '(6J99FNeJ_:w(?OuD=&2Ea{g *ZF/yfK%pk,+&ddNGvu/S2_`52jw^%05/-4Cq%q' );
define( 'LOGGED_IN_SALT',   '%YF(ULf84L0``[;0+i[Jey_Y>+.lGiwT,Q.=#N#US^r4fH&ND:X`!fq`4+gk7g%!' );
define( 'NONCE_SALT',       'j5VFfBZiu:](R{dz{oJq3jOD$fTNF*UL*DQ_q6L(wB&MgCv&7^_t),n{sEp4<0[{' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
