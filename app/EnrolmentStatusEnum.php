<?php

namespace App\Enums;

enum EnrolmentStatusEnum: string
{
    case Continue = 'مستمر';
    case SucseedFirstAttempt = 'ناجح دور اول';
    case SucseedSecondAttempt = 'ناجح دور ثاني';
    case FialCourese = 'راسب بالمواد الدراسية';
    case FialAbsence = 'راسب بالغياب';
    case FialCheet = 'راسب الغش';
    case Posponded = 'مؤجل';
}
