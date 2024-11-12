<x-layout>
    <x-page-heading>New Job</x-page-heading>
    <x-forms.form method="POST" action="/jobs/create">
        <x-forms.input name="title" label="Title" placeholder="Web Developer" />
        <x-forms.input name="salary" label="Salary" placeholder="$9000 USD" />
        <x-forms.input name="location" label="Location" placeholder="City, State" />

        <x-forms.select name="schedule" label="Schedule">
            <option value="Full Time" class="text-black">Full Time</option>
            <option value="Part Time" class="text-black">Part Time</option>
            <option value="Contract" class="text-black">Contract</option>
        </x-forms.select>

        <x-forms.input name="url" label="Job Link" placeholder="https://" />
        <x-forms.checkbox name="featured" label="Featured (cost $50)" />

        <x-forms.divider />

        <x-forms.input name="tags" label="Tags (comma separated) " placeholder="Frontend, Backend, Design" />
                
        <x-forms.button>Create Job</x-forms.button>
        
    </x-forms.form>
</x-layout>