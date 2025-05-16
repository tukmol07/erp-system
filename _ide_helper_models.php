<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Item> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Category whereUpdatedAt($value)
 */
	class Category extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $employee_name
 * @property string $employee_number
 * @property string $visa_number
 * @property string $category_resident
 * @property string $resident_number
 * @property string $nationality
 * @property string $date_arrival
 * @property string $date_hired
 * @property \Illuminate\Support\Carbon|null $contract_expiry_date
 * @property string $kiwa_contract_number
 * @property string $salary
 * @property string $educational_background
 * @property string $skills
 * @property string $ticket_provided
 * @property int|null $residence_renewal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Payroll> $payrolls
 * @property-read int|null $payrolls_count
 * @method static \Database\Factories\EmploymentRecordFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereCategoryResident($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereContractExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereDateArrival($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereDateHired($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereEducationalBackground($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereEmployeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereEmployeeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereKiwaContractNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereResidenceRenewal($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereResidentNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereTicketProvided($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|EmploymentRecord whereVisaNumber($value)
 */
	class EmploymentRecord extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $serial_number
 * @property string $name
 * @property string $sku
 * @property string|null $description
 * @property int|null $category_id
 * @property int|null $supplier_id
 * @property int $quantity
 * @property int $min_stock
 * @property \Illuminate\Support\Carbon|null $last_purchase_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Supplier|null $supplier
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereLastPurchaseDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereMinStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item whereUpdatedAt($value)
 */
	class Item extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int $employee_id
 * @property string $month
 * @property int $basic_salary
 * @property int|null $allowances
 * @property int|null $deductions
 * @property int|null $overtime_hours
 * @property string|null $overtime_rate
 * @property string|null $overtime_pay
 * @property string $net_salary
 * @property string|null $remarks
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $bonus
 * @property-read \App\Models\EmploymentRecord|null $employee
 * @method static \Database\Factories\PayrollFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereAllowances($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereBasicSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereDeductions($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereNetSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereOvertimeHours($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereOvertimePay($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereOvertimeRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Payroll whereUpdatedAt($value)
 */
	class Payroll extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $company_name
 * @property string $address
 * @property string $email
 * @property string $contact_person
 * @property string $contact_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Item> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereContactNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Supplier whereUpdatedAt($value)
 */
	class Supplier extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $department_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string $role
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

