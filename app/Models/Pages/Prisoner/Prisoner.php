<?php

namespace App\Models\Pages\Prisoner;

use App\Models\Admin\CivilStatus;
use App\Models\Admin\Country;
use App\Models\Admin\EducationLevel;
use App\Models\Admin\Ethnicity;
use App\Models\Admin\Municipality;
use App\Models\Admin\Prison\StatusPrison;
use App\Models\Admin\Sex;
use App\Models\Admin\SexualOrientation;
use App\Models\Admin\State;
use App\Models\Main\Visit\VisitScheduling;
use App\Models\Pages\Prison\Prison;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prisoner extends Model
{
    use HasFactory;
    protected $table    = 'prisoners';
    protected $guarded  = [];

    /**
     * País
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    /**
     * Estado
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo(State::class);
    }

    /**
     * Municípios
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipality()
    {
        return $this->belongsTo(Municipality::class);
    }

    /**
     * Etnia
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

    /**
     * Orientação Sexual
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sexual_orientation()
    {
        return $this->belongsTo(SexualOrientation::class);
    }

    /**
     * Escolaridade
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function education_level()
    {
        return $this->belongsTo(EducationLevel::class);
    }

    /**
     * Estado Civil
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function civil_status()
    {
        return $this->belongsTo(CivilStatus::class);
    }

    /**
     * Sexo
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }
    
    /**
     * Status da Prisão (preso, liberdade, transferido)
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status_prison()
    {
        return $this->belongsTo(StatusPrison::class);
    }

    /**
     * Histórico de Prisões
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function prisons()
    {
        return $this->hasMany(Prison::class);
    }

    /**
     * Processos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function processes()
    {
        return $this->hasMany(Process::class);
    }

    /**
     * Foto
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    /**
     * Endereço
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addresses()
    {
        return $this->hasMany(Address::class);
    }

    /**
     * Atendimentos Internos
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function internal_services()
    {
        return $this->hasMany(InternalService::class);
    }

    /**
     * Saídas Externas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function external_exits()
    {
        return $this->hasMany(ExternalExit::class);
    }

    /**
     * Familiares
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function families()
    {
        return $this->hasMany(Family::class);
    }

    /**
     * Documento
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    /**
     * Localizaçao na Unidade
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unit_address()
    {
        return $this->hasMany(UnitAddress::class);
    }

    /**
     * Atendimento com Advogado 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assistance_with_lawyers()
    {
        return $this->hasMany(AssistanceWithLawyer::class);
    }

    /**
     * Atendimento com Defensor Público
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assistance_with_public_defenders()
    {
        return $this->hasMany(AssistanceWithPublicDefender::class);
    }

    /**
     * Atendimento com a Justiça Restaurativa
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function restorative_justices()
    {
        return $this->hasMany(RestorativeJustice::class);
    }

    /**
     * Atendimento com Delegado de Polícia
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hearing_with_police_officers()
    {
        return $this->hasMany(HearingWithPoliceOfficer::class);
    }

    /**
     * Atendimento por Videoconferência
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function videoconference_hearings()
    {
        return $this->hasMany(VideoconferenceHearing::class);
    }

    /**
     * Agendamento de Visitas
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visit_schedulings()
    {
        return $this->hasMany(VisitScheduling::class);
    }
}
