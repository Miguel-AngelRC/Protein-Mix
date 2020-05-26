-- habilitar servidor:
 SET GLOBAL event_scheduler = ON;

-- Una vez que tengamos arrancado el planificador/scheduler podemos comprobarlo ejecutando:
SHOW PROCESSLIST;

-- Una vez el evento se haya creado, nosotros podemos listarlo:
SHOW events;

-- eliminar un evento haremos uso de DROP:
DROP EVENT INSERTID;

-- detener evento:
ALTER EVENT INSERTID
DISABLE;

-- evento que se ejecuta cada día para insertar un idVentaDiaria (venta diaria)
create event INSERTID -- programar tarea que queremos que se ejecute de forma periódica o momento en concreto
on SCHEDULE every 1 day -- se ejecute cada día
do insert into VentaDiaria (totalComprasD, fecha) values (null, CURDATE()); -- inserta un idVentaDiaria en la tabla ventadiaria
-- on completion preserve -- para que no se elimine el evento

-- evento que se ejecuta cada día para insertar un idVentaDiaria y la fecha actual (tabla ventadiaria) PRUEBA!!
create event INSERTID -- programar tarea que queremos que se ejecute de forma periódica o momento en concreto
on schedule at '2020-05-09 16:00:00' -- se ejecute en fecha y hora especificada
do
insert into ventadiaria (totalComprasD, fecha) values (null, CURDATE());
end //
delimiter ;