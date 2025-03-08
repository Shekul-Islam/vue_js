<script setup>
import { PageBanner,  PartnersBenefits,  WhoWeAre, YearsOfExpreience, TechSavvy, OurTeam, ClientsTestimonial, OurPartners, OurStaffingProcess, StaffingSolutions, WhyChooseUs } from '@/components';
</script>

<template>
    <div>
        <PageBanner/>
        <PartnersBenefits />
        <WhoWeAre :type="'about'"/>
        <YearsOfExpreience />
        <OurStaffingProcess />
        <StaffingSolutions/>
        <WhyChooseUs/>
        <OurTeam :type="'about'"/>
        <ClientsTestimonial/>
        <OurPartners/>
    </div>
</template>

<style scoped>

</style>