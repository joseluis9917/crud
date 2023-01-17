<?=$header?>
<a class="btn btn-success" href="<?=base_url('create')?>">Create new user</a>
<br/>
<br/>
        <table class="table table-light">
            <thread>
               <th>id</th>
               <th>grado</th>
               <th>nombre</th>
               <th>apellido_paterno</th>
               <th>apellido_materno</th>
               <th>cumpleanos</th>
               <th>cargo</th>
               <th>tipo</th>
               <th>daua</th>
               <th>tel_cel_1</th>
               <th>tel_cel_1_whats</th>
               <th>tel_cel_2</th>
               <th>tel_cel_2_whats</th>
               <th>tel_casa</th>
               <th>tel_oficina</th>
               <th>extension</th>
               <th>correo_institucional</th>
               <th>correo_personal</th>
               <th>comision</th>
               <th>protesta</th>
               <th>consejero_asociado</th>
               <th>activo</th>
               <th>foto</th>
            </thread>
            <tbody>
                <?php foreach($users as $user):; ?>
                    <tr>
                        <td><?= $user['id'] ?></td>
                        <td><?= $user['grado'] ?></td>
                        <td><?= $user['nombre'] ?></td>
                        <td><?= $user['apellido_paterno'] ?></td>
                        <td><?= $user['apellido_materno'] ?></td>
                        <td><?= $user['cumpleanos'] ?></td>
                        <td><?= $user['cargo'] ?></td>
                        <td><?= $user['tipo'] ?></td>
                        <td><?= $user['daua'] ?></td>
                        <td><?= $user['tel_cel_1'] ?></td>
                        <td><?= $user['tel_cel_1_whats'] ?></td>
                        <td><?= $user['tel_cel_2'] ?></td>
                        <td><?= $user['tel_cel_2_whats'] ?></td>
                        <td><?= $user['tel_casa'] ?></td>
                        <td><?= $user['tel_oficina'] ?></td>
                        <td><?= $user['extension'] ?></td>
                        <td><?= $user['correo_institucional'] ?></td>
                        <td><?= $user['comision'] ?></td>
                        <td><?= $user['protesta'] ?></td>
                        <td><?= $user['consejero_asociado'] ?></td>
                        <td><?= $user['activo'] ?></td>
                        <td><?= $user['foto'] ?></td>
                        <td>
                            <a href="<?=base_url('edit/'.$user['id'])?>" class="btn btn-info" type="button">Editar</a>
                            <a href="<?=base_url('delete/'.$user['id'])?>" class="btn btn-danger" type="button">Borrar</a>
                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
<?=$footer?>