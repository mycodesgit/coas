<tbody>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $applicant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($applicant->p_status == 2): ?>
                <tr>
                    <td><?php echo e($applicant->admission_id); ?></td>
                    <td style="text-transform: uppercase;">
                        <b>
                            <?php echo e($applicant->lname); ?>,
                            <?php echo e($applicant->fname); ?>

                            <?php if($applicant->mname == null): ?>
                                <?php else: ?> <?php echo e(substr($applicant->mname,0,1)); ?>.
                            <?php endif; ?> 

                            <?php if($applicant->ext == 'N/A'): ?>
                                <?php else: ?><?php echo e($applicant->ext); ?>

                            <?php endif; ?>
                        </b>
                    </td>
                    <td><?php if($applicant->type == 1): ?> New <?php else: ?> Transferee <?php endif; ?></td>
                    <td><?php echo e($applicant->contact); ?></td>
                    <td><?php echo e(Carbon\Carbon::parse($applicant->d_admission)->format('m/d/Y')); ?> : <?php echo e(\Carbon\Carbon::createFromFormat('H:i:s',$applicant->time)->format('h:i A')); ?></td>
                    <td style="text-align:center;">
                        <a data-toggle="tooltip" data-placement="bottom" title="Process Applicant"><i id="<?php echo e($applicant->id); ?>" data-toggle="modal" data-target="#info_examinee" class="btn btn-green glyphicon glyphicon-tasks info_applicant"></i></a>
                    </td>
                </tr>
                <?php else: ?>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody><?php /**PATH C:\xampp\htdocs\coas\resources\views/admission/examinee/table_body.blade.php ENDPATH**/ ?>