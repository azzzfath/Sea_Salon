<x-navbar>

<center>
  <section class="container py-10 md:py-15 my-10" id="reservation">
    <h4
      class="pt-6 text-center font-header text-3xl font-medium text-black sm:text-4xl lg:text-5xl">
      Reservation
    </h4>
    <form action="/reservation/post" method="POST" class="text-center mx-auto pt-10 lg:w-2/4 w-3/4">
      @csrf
      <div class="flex flex-col">
        <div class="flex flex-row">
          <input
            class="w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2"
            placeholder="Name"
            type="text"
            name="name"
          />
          <input
          class="w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2"
          placeholder="Phone Number"
          type="text"
          name="phone-number"
          />
        </div>
        <select class="w-full rounded border-grey-50 px-4 py-3 font-body text-black" name="service" id="" placeholder="Service" name="service">
          <option value="">Choose your service</option>
          <option value="Haircuts and Styling">Haircuts and Styling</option>
          <option value="Manicure and Pedicure">Manicure and Pedicure</option>
          <option value="Facial Treatments">Facial Treatments</option>
        </select>
        <div class="flex flex-row">
          <input class=" w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 " type="date" name="date">
          <select class="w-full rounded border-grey-50 px-4 py-3 font-body text-black md:w-1/2 " name="service" id="" placeholder="Service" name="time">
            <option value="">    </option>
            <option value="09:00-10:00">09:00-10:00</option>
            <option value="10:00-11:00">10:00-11:00</option>
            <option value="11:00-12:00">11:00-12:00</option>
            <option value="12:00-13:00">12:00-13:00</option>
            <option value="13:00-14:00">13:00-14:00</option>
            <option value="14:00-15:00">14:00-15:00</option>
            <option value="15:00-16:00">15:00-16:00</option>
            <option value="16:00-17:00">16:00-17:00</option>
            <option value="17:00-18:00">17:00-18:00</option>
            <option value="18:00-19:00">18:00-19:00</option>
            <option value="19:00-20:00">19:00-20:00</option>
            <option value="20:00-21:00">20:00-21:00</option>
        </div>
        <button  class="mt-6 flex items-center justify-center rounded bg-grey-400 px-8 py-3 font-header text-lg font-bold uppercase text-black hover:bg-grey-700">
          Submit
          <i class="bx bx-chevron-right relative -right-2 text-3xl"></i>
        </button>
      </div>
    </form>
  </section>
</center>

</x-navbar>