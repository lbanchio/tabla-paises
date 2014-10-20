Tabla de países
===============

Este repositorio contiene un pequeño script SQL (Probado en MySQL y MaríaDB) con información de países en español.

## Descripción de la tabla

Field | Type | Null | Key | Default | Extra |
----- | ---- | ---- | --- | ------- | ----- |
id | int(11) unsigned | NO | PRI | NULL | auto_increment |
iso3166code | smallint(6) | YES | | NULL | |
| iso3166a1 | char(2) | YES | | NULL | |
| iso3166a2 | char(3) | YES  | | NULL | |
| nombre | varchar(128) | YES  | | NULL | |

## «`Create`» de la tabla

```
CREATE TABLE `paises` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `iso3166code` smallint(6) DEFAULT NULL,
  `iso3166a1` char(2) DEFAULT NULL,
  `iso3166a2` char(3) DEFAULT NULL,
  `nombre` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8
```

## Descripción de columnas

**iso3166code**: ISO 3166-1 numérico, códigos de países de 3 números. Para países que no utilizan el alfabeto latino.
**iso3166a1**: ISO 3166-1 alfa-2, códigos de países de 2 letras. Recomendados para propósito general.
**iso3166a2**: ISO 3166-1 alfa-3, códigos de países de 3 letras. Más relacionado con el nombre del país.

Fuente y mas información: http://es.wikipedia.org/wiki/ISO_3166

