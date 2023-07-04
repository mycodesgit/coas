<tbody>
                @foreach($data as $applicant)
                @if ($applicant->p_status == 2)
                <tr>
                    <td>{{ $applicant->admission_id }}</td>
                    <td style="text-transform: uppercase;">
                        <b>
                            {{$applicant->lname}},
                            {{$applicant->fname}}
                            @if($applicant->mname == null)
                                @else {{ substr($applicant->mname,0,1) }}.
                            @endif 

                            @if($applicant->ext == 'N/A')
                                @else{{$applicant->ext}}
                            @endif
                        </b>
                    </td>
                    <td>@if ($applicant->type == 1) New @else Transferee @endif</td>
                    <td>{{ $applicant->contact }}</td>
                    <td>{{  Carbon\Carbon::parse($applicant->d_admission)->format('m/d/Y') }} : {{\Carbon\Carbon::createFromFormat('H:i:s',$applicant->time)->format('h:i A')}}</td>
                    <td style="text-align:center;">
                        <a data-toggle="tooltip" data-placement="bottom" title="Process Applicant"><i id="{{ $applicant->id }}" data-toggle="modal" data-target="#info_examinee" class="btn btn-green glyphicon glyphicon-tasks info_applicant"></i></a>
                    </td>
                </tr>
                @else
                @endif
                @endforeach
            </tbody>