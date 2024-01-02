"use strict";
/**
 *
 * @module Base
 * @kind class
 *
 * @classdesc Base class
 */

/**
 * Represents a Base class that extends the Transform class from the stream module.
 */
export default class Base  {
  /**
   * Constructs a new instance of the Base class.
   *
   * @param {...Object} arrayOfObjects - Additional objects containing options to be assigned to the base class.
   */
  constructor(...arrayOfObjects) {

    // Assign additional options to the base class
    arrayOfObjects.forEach(option => {
      if (Object.keys(option).length > 0) {
        Object.keys(option).forEach((key) => {
          if (!this[key]) this[key] = option[key];
        });
      }
    });
    // Auto bind methods of the base class
    this.autobind(Base);
    // Auto invoke methods of the base class
    this.autoinvoker(Base);

  }


  /**
   * Autobinds class methods to the instance of the class.
   *
   * @param {Object} className - The class whose methods will be autobound.
   */
  autobinder(className = {}) {
    for (let method of Object.getOwnPropertyNames(className.prototype)) {
      if (typeof this[method] === "function" && method !== "constructor") {
        this[method] = this[method].bind(this);
      }
    }
  }


  /**
   * Autobinds the autobinder method to the current instance and invokes it with the specified class.
   *
   * @param {Object} className - The class whose methods will be autobound.
   */
  autobind(className = {}) {
    this.autobinder = this.autobinder.bind(this);
    this.autobinder(className);
  }



  /**
   * Automatically invokes methods from the specified class name on the current instance.
   *
   * @param {Function} className - The class name whose methods to automatically invoke.
   */
  autoinvoker(className = {}) {
    for (let method of Object.getOwnPropertyNames(className.prototype)) {
      this.autoinvoked().forEach((name) => {
        if (method === name) {
          this[method]();
        }
      });
    }
  }


  /**
   * Returns an array of method names that should be automatically invoked by the `autoinvoker` method.
   * Modify this method to specify the method names to be autoinvoked.
   *
   * @returns {Array} - An array of method names.
   */

  autoinvoked() {
    return [""];
  }


}



