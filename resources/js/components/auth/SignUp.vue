<template>
  <div class="min-h-screen bg-white flex">
    <div
      class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24"
    >
      <div class="mx-auto w-full max-w-sm">
        <div>
          <img
            class="h-12 w-auto"
            src="/img/logos/logo.svg"
            alt="Workflow"
          />

          <div class="svg-bg mb-2 h-32 mt-8"></div>

          <h2 class="mt-4 text-3xl leading-9 font-extrabold text-gray-900">
            Create an account
          </h2>
          <p class="mt-2 text-sm leading-5 text-gray-600 max-w">
            Or
            <a
              href="#"
              class="font-medium text-audio-purple-600 hover:text-audio-purple-500 focus:outline-none focus:underline transition ease-in-out duration-150"
            >
              login here if you already have an account
            </a>
          </p>
        </div>

        <div class="mt-8">
          <!-- alternate sign up options -->
          <div class="mt-6">
            <form @submit.prevent="submit">
              <div>
                <label
                  for="email"
                  class="block text-sm font-medium leading-5 text-gray-700"
                  :class="{ 'text-red-700': errors.email !== null }"
                >
                  Email address
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input
                    id="email"
                    v-model="email"
                    type="email"
                    required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    :class="{ 'border-red-300': errors.email !== null }"
                  />
                </div>
                <span v-if="errors.email !== null" class="mt-1">
                  <p class="text-red-700 text-sm font-medium">
                    {{ errors.email[0] }}
                  </p>
                </span>
              </div>

              <div class="mt-6">
                <label
                  for="password"
                  class="block text-sm font-medium leading-5 text-gray-700"
                  :class="{ 'text-red-700': errors.email !== null }"
                >
                  Password
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                  <input
                    id="password"
                    v-model="password"
                    type="password"
                    required
                    class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                    :class="{ 'border-red-300': errors.password !== null }"
                  />
                </div>
                <span v-if="errors.password !== null" class="mt-1">
                  <p class="text-red-700 text-sm font-medium">
                    {{ errors.password[0] }}
                  </p>
                </span>
              </div>

              <div class="mt-6">
                <p class="block text-sm font-medium leading-5 text-gray-700">
                  Are you a :
                </p>
                <div class="flex items-center mt-2">
                  <input
                    id="label"
                    type="radio"
                    v-model="user_type"
                    value="1"
                    class="form-radio h-4 w-4 text-audio-purple-600 transition duration-150 ease-in-out"
                  />
                  <label for="label" class="ml-3">
                    <span
                      class="block text-sm leading-5 font-medium text-gray-700"
                      >Record Label</span
                    >
                  </label>
                </div>
                <div class="mt-4 flex items-center">
                  <input
                    id="push_email"
                    v-model="user_type"
                    value="0"
                    type="radio"
                    class="form-radio h-4 w-4 text-audio-purple-600 transition duration-150 ease-in-out"
                  />
                  <label for="push_email" class="ml-3">
                    <span
                      class="block text-sm leading-5 font-medium text-gray-700"
                      >Independent Artist</span
                    >
                  </label>
                </div>
              </div>

              <div class="mt-8">
                <span class="block w-full rounded-md shadow-sm">
                  <button
                    type="submit"
                    class="w-full py-4 flex justify-center py-2 px-4 text-base border border-transparent text-sm font-medium rounded-md text-white bg-audio-purple-400 hover:bg-audio-purple-900 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out"
                  >
                    Sign Up
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>

        <div class="mt-5 svg-bg h-32"></div>
      </div>
    </div>
    <div class="hidden lg:block relative w-0 flex-1">
      <img
        class="absolute inset-0 h-full w-full object-cover"
        src="/img/signup-cover.png"
        alt="signUp"
      />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      email: null,
      password: null,
      user_type: null,
      errors: {
        email: null,
        password: null,
        user_type: null
      }
    };
  },
  methods: {
    submit() {
      if (this.user_type === null) {
        flash(
          "you must select a user type of either a label or artist",
          "error"
        );
        return;
      }
      this.errors = {
        email: null,
        password: null,
        user_type: null
      };
      axios
        .post("/json/sign-up", {
          email: this.email,
          password: this.password,
          user_type: this.user_type
        })
        .then(({ data }) => {
          flash("Sign Up successful");
          window.location.href = data.redirect;
        })
        .catch(
          ({
            response: {
              data: { errors }
            }
          }) => {
            if (errors) {
              this.errors = { ...errors };
              flash("An error occured.", "error");
            }
          }
        );
    }
  }
};
</script>

<style scoped>
.svg-bg {
  background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23ccaec9' fill-opacity='0.27' fill-rule='evenodd'%3E%3Ccircle cx='3' cy='3' r='3'/%3E%3Ccircle cx='13' cy='13' r='3'/%3E%3C/g%3E%3C/svg%3E");
}
</style>

